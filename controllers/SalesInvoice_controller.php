<?php
$PriceofAll = 0;
$transportPrice = 250000;

$data =getAllCartByUserId($_SESSION['id']);

foreach ($data as $key=>$value) {
    $data = getProductById($value['pid']);
    $data['qty'] = $value['qty'];
    $PriceofAll +=$data['price'] * $data['qty'];
    $AllProductArray[$key] = $data;
}

includethisView();