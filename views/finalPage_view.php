<?php
function get_title() {
    return "صفحه نهایی";
}
function get_content()
{
    global $deatailOrder;
    $orderId = $deatailOrder['id'];
    $orderReciverName = $deatailOrder['reciver_name'];
?>
    <section class="grid-display col-sm-1 col-md-1 col-lg-1">
        <section class="page_content">
            <p>سفارش شما به با شناسه <span><?php echo $orderId; ?></span> ثبت شد.</p>
            <p>گیرنده سفارش <span><?php echo $orderReciverName; ?></span> است.</p>
            <a href="<?php echo getOrderDeatailUrl($orderId); ?>" class="btn btn-primary">پیگیری سفارش</a>
        </section>
    </section>
<?php 
}
renderPage();