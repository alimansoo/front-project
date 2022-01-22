<?php
if (!isset($_SESSION['id'])) {
    redirect_to(
        get_Full_URL('login')
    );
}

$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$query = "SELECT * FROM `cards` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

$userquery = "SELECT `card_changed` FROM `user` WHERE id=?";
$userresult = $mysql->query($userquery,$_SESSION['id'])->fetchArray();
$iscardchanged = $userresult["card_changed"];

$userquery = "UPDATE `user` SET `card_changed`=false WHERE id=?";
$userresult = $mysql->query($userquery,$_SESSION['id']);

$allofPrice = 0;

$productsArray = array();

foreach ($result as $key=>$value) {
    $query ="SELECT * FROM `product` WHERE id=?";
    $result = $mysql->query($query,$value['pid'])->fetchArray();
    $result['qty'] = $value['qty'];
    $allofPrice +=$result['price'] * $result['qty'];
    $productsArray[$key] = $result;
}
$filename = explode('_',basename(__FILE__))[0];
include viewroot.$filename.'_view.php';