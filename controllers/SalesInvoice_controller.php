<?php
$allofPrice = 0;
$transportPrice = 250000;

$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$query = "SELECT * FROM `cards` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

foreach ($result as $key=>$value) {
    $query ="SELECT * FROM `product` WHERE id=?";
    $result = $mysql->query($query,$value['pid'])->fetchArray();
    $result['qty'] = $value['qty'];
    $allofPrice +=$result['price'] * $result['qty'];
    $productsArray[$key] = $result;
}

includethisView();