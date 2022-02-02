<?php
function get_title() {
    return "محصول";
}
function get_content()
{
    global $dbuser;
    global $product;
    global $isContainCard;
    global $allCommentProduct;
?>
    <section class="grid-display col-sm-1 .col-md-1 col-lg-3-product-view productView">
            <section class="productView_image">
                <img src="<?php echo $product->Image_Source(); ?>" width="90%" alt="" class="image">
            </section>
            <section class="productView_detail">
                <h1 class="productView_detail_title">
                    <?php echo $product->name; ?> 
                </h1>
                <div class="productView_detail_score">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="productView_detail_description">
                    <ul>
                        <li>دارای ابعاد استاندارد</li>
                        <li>متنوع در ضخامت های گوناگون</li>
                        <li>نهیه شده از مواد مرغوب</li>
                    </ul>
                </div>
                
            </section>
            <section class="productView_form_order">
                <h6 class="productView_form_order_heading">مبلغ نهایی سفارش شما :</h6>
                <div class="productView_form_order_price"><?php echo number_format($product->price,0)?><span class="price_component">ریال</span></div>
                <hr>
                <ul>
                    <li>مبلغ نهایی بدون محاسبه مالیات است.</li>
                    <li>قیمت ارسال سفارش در مراحل بعد محاسبه می شود.</li>
                </ul>
                <?php if ($product->Is_Cart()===false):?>
                    <a href="<?php echo getProduc_AddCart_tUrl($product->id,true); ?>" class="btn btn-primary full-btn">اضافه کردن به سبد خرید</a>
                <?php endif; ?>
            </section>
        </section>

        <section id="comment" class="page_content">
            <h4 class="page_content_title">بخش نظرات این محصول</h4>
            <?php foreach ($allCommentProduct as $CommentProduct):
                $model = new Comment($CommentProduct);
                Template::Include("ProductComment",['Comment'=>$model]);
            endforeach; ?>
            <h4 class="page_content_title">اضافه کردن کامنت جدید</h4>
            <form action="<?php echo SITE_URL; ?>productcomment?pid=<?php echo $product->id ?>" method="get" id="CommentForm">
                <div class="input_material_block">
                    <input type="text" name="subject" id="subjectComment">
                    <label for="subjectComment">موضوع</label>
                </div>
                <div class="input_material_block">
                    <textarea name="message" id="messagComment" cols="30" rows="10"></textarea>
                    <label for="messagComment">متن نظر</label>
                </div>
                <input type="submit" value="ثبت نظر" class="btn btn-primary">
            </form>
        </section>
        
<?php 
}
 