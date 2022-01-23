<?php 
$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$id = $_GET['pid'];

$product = getProductById($id);

$isContainCard = false;

function isContainCard($id)
{
    $result = getCartByPid_Uid($id,$_SESSION['id']);
    if(count($result) > 0 ){
        return true;
    }
    return false;
}
if (isset($_SESSION['id'])) {
    $isContainCard = isContainCard($id);
}

function namebyid($mysql,$id)
{
    $query = "SELECT  `firstname`, `lastname` FROM `user` WHERE id=?";
    $user = $mysql->query($query,$id)->fetchArray();
    return $user['firstname']." ".$user['lastname'];
}

$query = "SELECT * FROM `comment` WHERE pid=?";
$allCommentProduct = $mysql->query($query,$id)->fetchAll();

includethisView();