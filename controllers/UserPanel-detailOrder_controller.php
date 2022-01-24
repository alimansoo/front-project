<?php 
$orderid = $_GET['orderid'];

$result = getUserOrderById($orderid);

$priceAll = $result['priceAll'];
$transport_price = $result['transport_price'];
$addres = $result['addres'];
$recive_date = $result['recive_date'];
$is_pay = $result['is_pay'];
if ($is_pay) {
    $is_pay = "پرداخت شده";
}else {
    $is_pay = "پرداخت نشده";
}

$result = getAllUserOrderItmeByOrderId($result['id']);


$allProduct = array();
foreach ($result as $key=>$value) {
    $array = array();
    $result1 = getProductById($value['pid']);
    $array['name'] = $result1['name'];
    $array['price'] = $result1['price'];
    $array['image_src'] = $result1['image_src'];
    $array['qty'] = $value['qty'];
    $allProduct[$key] = $array;
}

includethisView();