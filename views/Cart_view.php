<?php
function get_title() {
    return "سبد خرید";
}
function get_content()
{
    global $AllProductInCart;
    global $PriceofAll;  
?>
        <section class="grid-display col-sm-1 col-md-1 col-lg-3 ">
            <?php if (count($AllProductInCart)<1):?>
                <section class="page_content grid-lg-1to3">
                    محصولی در سبد خرید وجود ندارد!!
                </section>
            <?php else: ?>
                <section class="page_content grid-lg-1to3">
                    <table class="table">
                        <tr>
                        <th>تصویر</th>
                        <th>نام محصول</th>
                        <th>قیمت</th>
                        <th>تعداد</th>
                        <th></th>
                        </tr>
                        <?php 
                        foreach ($AllProductInCart as $product) {
                            include assetsroot.'templates/Card.php';
                        }  
                        ?>
                    </table>
                </section>
                <section class="page_content Card_deatail">
                    <h3 class="page_content_title">سبد خرید</h3>
                    <div class="Card_deatail_row grid-display grid-50-50 PriceAll">
                        <div class="Card_deatail_row_key">قیمت کل محصولات:</div>
                        <div class="Card_deatail_row_value"><?php echo number_format($PriceofAll,0);?><span class="price_componant">ریال</span></div>
                    </div>
                    <div class="Card_deatail_row grid-display grid-50-50">
                        <div class="Card_deatail_row_key">تخفیف خورده:</div>
                        <div class="Card_deatail_row_value">0<span class="price_componant">ریال</span></div>
                    </div>
                    <div class="Card_deatail_row grid-display grid-50-50">
                        <div class="Card_deatail_row_key">قیمت پرداختی:</div>
                        <div class="Card_deatail_row_value"><?php echo number_format($PriceofAll,0);?><span class="price_componant">ریال</span></div>
                    </div>
                    <a href="<?php echo get_Full_URL('order.sailsinvoice');?>" class="Card_deatail_btn btn btn-primary">ثبت سفارش</a>
                </section>
            <?php endif; ?>
        </section>
<?php 
}
renderPage();
?>