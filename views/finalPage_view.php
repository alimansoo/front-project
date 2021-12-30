<?php 
require '__init__.php';
?>

<p>سفارش شما به با شناسه <span><?php echo $order_deatail['id']; ?></span> ثبت شد.</p>
<p>گیرنده سفارش <span><?php echo $order_deatail['reciver_name']; ?></span> است.</p>
<a href="">پیگیری سفارش</a>