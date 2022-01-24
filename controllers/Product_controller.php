<?php 
$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$id = $_GET['pid'];

$product = getProductById($id);

$isContainCard = false;

if (isset($_SESSION['id'])) {
    $isContainCard = isContainCard($id);
}



$query = "SELECT * FROM `comment` WHERE pid=?";
$allCommentProduct = $mysql->query($query,$id)->fetchAll();

includethisView();