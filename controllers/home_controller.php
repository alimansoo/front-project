<?php
require "__init__.php";
$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);
$query = "SELECT * FROM `product`";
$products = $mysql->query($query)->fetchAll();

include $baseroot.'views/home_view.php';
// include_view($baseroot,'home_view.php');

function isLike($mysql,$id)
{
    $query = "SELECT * FROM `likeproduct` WHERE pid=? AND uid=?";
    $product = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();
    if(isset($product['id'])){
        return true;
    }
    return false;
}

function isBookmark($mysql,$id)
{
    $query = "SELECT * FROM `bookmarkproduct` WHERE pid=? AND uid=?";
    $product = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();
    if(isset($product['id'])){
        return true;
    }
    return false;
}

function isContainCard($mysql,$id)
{
    $query = "SELECT * FROM `cards` WHERE pid=? AND uid=?";
    $product = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();
    if(isset($product['id'])){
        return true;
    }
    return false;
}

$mysql->close();