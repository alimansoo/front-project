<?php
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $productsArray;
    global $allofPrice;
    global $transportPrice;
?>
<section class="page_content">
            <h3 class="page_content_title">فاکتور خرید شما</h3>
            <div>هزینه کل سفارش شما : <span><?php echo $allofPrice; ?></span>ریال</div>
            <div>هزینه حمل و نقل : <span><?php echo $transportPrice; ?></span>ریال</div>
            <div>هزینه پرداختی : <span><?php echo $allofPrice + $transportPrice; ?></span>ریال</div>
            <br>
            <table class="table">
                <tr>
                    <th>تصویر</th>
                    <th>نام محصول</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                </tr>
                <?php 
                foreach ($productsArray as $product) {
                    echo "
                    <tr>
                        <td><img src='".site_url."assets/images/products/{$product['image_src']}' alt='{$product['name']}' width='50px'/></td>
                        <td>{$product['name']}</td>
                        <td>{$product['price']}ریال</td>
                        <td>{$product['qty']}</td>
                    </tr>";
                }  
                ?>
            </table>
            <form action="<?php echo get_Full_URL('order.deatailorder'); ?>" method="post">
                <input type="hidden" name="priceAll" value="<?php echo $allofPrice; ?>">
                <input type="hidden" name="transport_price" value="<?php echo $transportPrice; ?>">
                <input type="submit" name="submit" class="btn btn-primary" value=" تایید فاکتور">
            </form>
        </section>    
<?php 
}
renderPage();