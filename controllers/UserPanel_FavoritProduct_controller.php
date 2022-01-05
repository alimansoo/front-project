<?php
require "__init__.php";
$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `likeproduct` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

$productsArray = array();

foreach ($result as $key=>$value) {
    $query ="SELECT * FROM `product` WHERE id=?";
    $result = $mysql->query($query,$value['pid'])->fetchArray();
    $productsArray[$key] = $result;
}

$filename = explode('_',basename(__FILE__))[0];
include $viewroot.$filename.'_view.php';