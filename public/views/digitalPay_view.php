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
        <form method="post">
            <input type="submit" name="submit" class="btn btn-success" value="پرداخت">
        </form>
    </section>  
<?php 
}
renderPage();
