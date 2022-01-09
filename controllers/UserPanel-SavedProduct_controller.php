<?php
require "__init__.php";
$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$query = "SELECT * FROM `bookmarkproduct` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

$productsArray = array();

foreach ($result as $key=>$value) {
    $query ="SELECT * FROM `product` WHERE id=?";
    $result = $mysql->query($query,$value['pid'])->fetchArray();
    $productsArray[$key] = $result;
}

$filename = explode('_',basename(__FILE__))[0];
include $viewroot.$filename.'_view.php';