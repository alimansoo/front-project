<?php 
$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$id = $_GET['pid'];

$query = "SELECT * FROM `product` WHERE id=?";
$product = $mysql->query($query,$id)->fetchArray();

$isContainCard = false;

function isContainCard($id)
{
    global $mysql;
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

function namebyid($mysql,$id)
{
    $query = "SELECT  `firstname`, `lastname` FROM `user` WHERE id=?";
    $user = $mysql->query($query,$id)->fetchArray();
    return $user['firstname']." ".$user['lastname'];
}

$query = "SELECT * FROM `comment` WHERE pid=?";
$allCommentProduct = $mysql->query($query,$id)->fetchAll();

$filename = explode('_',basename(__FILE__))[0];
include viewroot.$filename.'_view.php';