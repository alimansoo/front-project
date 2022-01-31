<?php
$dbcart = new DBCartEngin();
$dbprdouct = new DBProductEngin();
$PriceofAll = 0;
$transportPrice = 250000;

$data = $dbcart->getAllByUid($_SESSION['id']);

foreach ($data as $key=>$value) {
    $data = $dbprdouct->getById($value['pid']);
    $data['qty'] = $value['qty'];
    $PriceofAll +=$data['price'] * $data['qty'];
    $AllProductArray[$key] = $data;
}

View::IncludeForThis();