<?php 
require '__init__.php';

$id = $_GET['id'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);
$query = "SELECT * FROM `product` WHERE id=?";
$product = $mysql->query($query,$id)->fetchArray();
$isContainCard = false;

function isContainCard($mysql,$id)
{
    $query = "SELECT * FROM `cards` WHERE pid=? AND uid=?";
    $product = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();
    if(isset($product['id'])){
        return true;
    }
    return false;
}
if (isset($_SESSION['id'])) {
    $isContainCard = isContainCard($mysql,$id);
}

include $viewroot.'Product_view.php';