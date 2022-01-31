<?php 
$orderId=$_GET['orderId'];

if (isset($_POST['submit'])) {
    $_SESSION['is_payed'] = true;
    $_SESSION['orderId'] = $orderId;
    Rout::redirect_to_url('order.finalpage');
    $_SESSION['is_payed'] = true;
    $_SESSION['orderId'] = $orderId;
}else {
    includethisView();
}