<?php
function user_panel()
{
    return true;
}
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $Order;
    global $OrderItemArray;
    global $OrderItemProduct;
?>
    <section class="grid-lg-2to5">
        <section class="page_content">
                <h3 class="page_content_title">جزئیات سفارش شما</h3>
                <div>هزینه کل سفارش شما : <span><?php echo $Order->priceAll; ?></span>ریال</div>
                <div>هزینه حمل و نقل : <span><?php echo $Order->transport_price; ?></span>ریال</div>
                <div>آدرس سفارش : <span><?php echo $Order->addres; ?></span></div>
                <div>تاریخ تحویل سفارش : <span><?php echo $Order->recive_date; ?></span></div>
                <div>وضعيت سفارش : <span><?php echo $Order->is_pay; ?></span></div>
                <table class="table">
                    <tr>
                        <th>تصویر</th>
                        <th>نام محصول</th>
                        <th>قیمت</th>
                        <th>تعداد</th>
                    </tr>
                    <?php 
                    foreach ($OrderItemProduct as $key => $Product) :
                    ?>
                        <tr>
                            <td><img src='<?php echo $Product->image_src; ?>' alt='' width='50px'/></td>
                            <td><?php echo $Product->name; ?></td>
                            <td><span><?php echo $Product->priceFormated ?></span>ریال</td>
                            <td><?php echo $OrderItemArray[$key]->qty;?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
        </section>   
    </section>
<?php 
}
 
