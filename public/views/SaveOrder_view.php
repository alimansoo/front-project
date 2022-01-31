<?php
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $status;
    global $orderId;
?>
    <section class="page_content">
        <h3 class="page_content_title">وضعیت خرید شما</h3>
        <?php if ($status === "success"):?>
            <p>سفارش شما ثبت شد و منتظر پرداخت است</p>
            <a href='<?php echo Rout::full_url('order.digitalpay'); ?>?orderId=<?php echo $orderId ?>' class="btn btn-success">انتقال به درگاه پرداخت</a>
        <?php endif; ?>
    </section>  
<?php 
}
 