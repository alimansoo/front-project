<?php
function user_panel()
{
    return true;
}
function get_title() {
    return "ثبت نام کاربر جدید";
}
function get_content()
{
    global $AllProductArray;
?>
    <section class="grid-lg-2to5">
        <section class="page_content">
            <h3 class="page_content_title">محصول لایک شده </h3>
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
                            <td><?php echo number_format($product['price'],0); ?>ریال</td>
                            <td><a href='<?php echo getProduc_like_Url($product['id']); ?>' class='ajaxWorkerLink'><i class='fas fa-trash'></i></a></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
        </section>    
    </section>
<?php 
}
App::render();