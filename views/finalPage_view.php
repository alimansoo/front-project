<?php
function get_title() {
    return "صفحه اصلی";
}
function get_content()
{
    global $order_deatail;
?>
    <section class="grid-display col-sm-1 col-md-1 col-lg-1">
        <section class="page_content">
            <p>سفارش شما به با شناسه <span><?php echo $order_deatail['id']; ?></span> ثبت شد.</p>
            <p>گیرنده سفارش <span><?php echo $order_deatail['reciver_name']; ?></span> است.</p>
            <a href="" class="btn btn-primary">پیگیری سفارش</a>
        </section>
    </section>
<?php 
}
renderPage();