<?php
function is_admin_panel(){
    return true;
}
function get_title() {
    return "سبد خرید";
}
function get_content()
{
    global $productsArray;
?>
    <section class="grid-lg-1to4">
        <section class="page_content">
            <h3 class="page_content_title">لیست محصولات</h3>
            <a  href="<?php echo Rout::full_url('adminpanel.addproduct');?>" class="btn btn-primary">اضافه کردن محصول+</a>
            <br>
            <table class="table">
                <tr>
                <th>شناسه</th>
                <th>تصویر</th>
                <th>نام محصول</th>
                <th>دسته بندی محصول</th>
                <th>نوع قیمت دهی</th>
                <th>قیمت</th>
                <th></th>
                <th></th>
                </tr>
                <?php 
                foreach ($productsArray as $Product) :
                    Template::Include('AdminProduct',['Product'=>$Product]);
                endforeach;
                ?>
            </table>
        </section>
    </section>
<?php 
}