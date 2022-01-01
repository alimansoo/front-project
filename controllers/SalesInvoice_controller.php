<?php 
require '__init__.php';

$allofPrice = 0;
$transportPrice = 250000;

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `cards` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

foreach ($result as $key=>$value) {
    $query ="SELECT * FROM `product` WHERE id=?";
    $result = $mysql->query($query,$value['pid'])->fetchArray();
    $result['qty'] = $value['qty'];
    $allofPrice +=$result['price'] * $result['qty'];
    $productsArray[$key] = $result;
}
include $viewroot."SalesInvoice_view.php";