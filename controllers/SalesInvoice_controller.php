<?php
$allofPrice = 0;
$transportPrice = 250000;

$result =getAllCartByUserId($_SESSION['id']);

foreach ($result as $key=>$value) {
    $result = getProductById($value['pid']);
    $result['qty'] = $value['qty'];
    $allofPrice +=$result['price'] * $result['qty'];
    $productsArray[$key] = $result;
}

includethisView();