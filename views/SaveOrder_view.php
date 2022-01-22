<?php
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $status;
    global $orderid;
?>
    <section class="page_content">
        <h3 class="page_content_title">وضعیت خرید شما</h3>
        <?php if ($status === "success"):?>
            <p>سفارش شما ثبت شد و منتظر پرداخت است</p>
            <a href='<?php echo get_Full_URL('order.digitalpay'); ?>?orderid=<?php echo $orderid ?>' class="btn btn-success">انتقال به درگاه پرداخت</a>
        <?php endif; ?>
    </section>  
<?php 
}
renderPage();