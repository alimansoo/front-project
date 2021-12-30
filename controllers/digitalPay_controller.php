<?php 
require '__init__.php';

$orderid=$_GET['orderid'];

if (isset($_POST['submit'])) {
    header("Location:finalPage_controller.php");
    $_SESSION['is_payed'] = true;
    $_SESSION['orderid'] = $orderid;
}else {
    include $viewroot."digitalPay_view.php";
}