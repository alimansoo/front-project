<?php
if (!isset($_SESSION['id'])) {
    redirect_to(
        get_Full_URL('login')
    );
}

$result = getAllCartByUserId($_SESSION['id']);

// $userquery = "SELECT `card_changed` FROM `user` WHERE id=?";
// $userresult = $mysql->query($userquery,$_SESSION['id'])->fetchArray();
// $iscardchanged = $userresult["card_changed"];

// $userquery = "UPDATE `user` SET `card_changed`=false WHERE id=?";
// $userresult = $mysql->query($userquery,$_SESSION['id']);

$allofPrice = 0;

$productsArray = array();

foreach ($result as $key=>$value) {
    $result = getProductById($value['pid']);
    $result['qty'] = $value['qty'];
    $allofPrice +=$result['price'] * $result['qty'];
    $productsArray[$key] = $result;
}
includethisView();