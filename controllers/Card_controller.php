<?php
require "__init__.php";

if (!isset($_SESSION['id'])) {
    header("Location:login_controller.php");
}

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `cards` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

$productsArray = array();

foreach ($result as $key=>$value) {
    $query ="SELECT * FROM `product` WHERE id=?";
    $result = $mysql->query($query,$value['pid'])->fetchArray();
    $result['qty'] = $value['qty'];
    $productsArray[$key] = $result;
}

include($baseroot."views/Card_view.php");