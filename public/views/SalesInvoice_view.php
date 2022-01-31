<?php
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $AllProductArray;
    global $PriceofAll;
    global $transportPrice;
?>
<section class="page_content">
            <h3 class="page_content_title">فاکتور خرید شما</h3>
            <div>هزینه کل سفارش شما : <span><?php echo $PriceofAll; ?></span>ریال</div>
            <div>هزینه حمل و نقل : <span><?php echo $transportPrice; ?></span>ریال</div>
            <div>هزینه پرداختی : <span><?php echo $PriceofAll + $transportPrice; ?></span>ریال</div>
            <br>
            <table class="table">
                <tr>
                    <th>تصویر</th>
                    <th>نام محصول</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                </tr>
                <?php 
                foreach ($AllProductArray as $product) {
                    Template::Include("salesInvoice",$product);
                }  
                ?>
            </table>
            <form action="<?php echo get_Full_URL('order.deatailorder'); ?>" method="post">
                <input type="hidden" name="priceAll" value="<?php echo $PriceofAll; ?>">
                <input type="hidden" name="transport_price" value="<?php echo $transportPrice; ?>">
                <input type="submit" name="submit" class="btn btn-primary" value=" تایید فاکتور">
            </form>
        </section>    
<?php 
}
renderPage();