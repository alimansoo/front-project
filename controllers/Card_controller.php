<?php
if (!isset($_SESSION['id'])) {
    header("Location:login_controller.php");
}

$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$query = "SELECT * FROM `cards` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();



$allofPrice = 0;

$productsArray = array();

foreach ($result as $key=>$value) {
    $query ="SELECT * FROM `product` WHERE id=?";
    $result = $mysql->query($query,$value['pid'])->fetchArray();
    $result['qty'] = $value['qty'];
    $allofPrice +=$result['price'] * $result['qty'];
    $productsArray[$key] = $result;
}
$filename = explode('_',basename(__FILE__))[0];
include $viewroot.$filename.'_view.php';