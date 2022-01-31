<?php
function get_title() {
    return "ثبت نام کاربر جدید";
}
function get_content()
{
    global $AllProductArray;
?>
    <section class="grid-display col-sm-1 col-md-1 col-lg-4">
        <?php Template::Include('UserPanelSidebar'); ?>
        <section class="grid-lg-2to5">
            <section class="page_content">
        <h3 class="page_content_title">محصولات ذخیره شده</h3>
            <table class="table">
                <tr>
                <th>شناسه</th>
                <th>تصویر</th>
                <th>نام محصول</th>
                <th>دسته بندی محصول</th>
                <th>قیمت</th>
                <th></th>
                </tr>
                <?php 
                foreach ($AllProductArray as $product) :
                ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><img src='<?php echo getImageSource($product['image_src']); ?>' alt='<?php echo $product['name']; ?>' width='50px'/></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['catg']; ?></td>
                        <td><?php echo $product['price']; ?>ریال</td>
                        <td><a href='<?php echo getProduc_bookmark_Url($product['id']); ?>' class='ajaxWorkerLink'><i class='fas fa-trash'></i></a></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </table>
            </section>
        </section>
    </section>
<?php 
}
renderPage();