<?php 
require '__init__.php';

$orderid=$_GET['orderid'];

if (isset($_POST['submit'])) {
    header("Location:finalPage_controller.php");
    $_SESSION['is_payed'] = true;
    $_SESSION['orderid'] = $orderid;
}else {
    $filename = explode('_',basename(__FILE__))[0];
    include viewroot.$filename.'_view.php';
}