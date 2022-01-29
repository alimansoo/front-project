<?php 
$orderId = $_GET['orderId'];

$data = getUserOrderById($orderId);

$priceAll = $data['priceAll'];
$transport_price = $data['transport_price'];
$addres = $data['addres'];
$recive_date = $data['recive_date'];
$is_pay = $data['is_pay'];
if ($is_pay) {
    $is_pay = "پرداخت شده";
}else {
    $is_pay = "پرداخت نشده";
}

$data = getAllUserOrderItmeByorderId($data['id']);


$allProduct = array();
foreach ($data as $key=>$value) {
    $array = array();
    $data1 = getProductById($value['pid']);
    $array['name'] = $data1['name'];
    $array['price'] = $data1['price'];
    $array['image_src'] = $data1['image_src'];
    $array['qty'] = $value['qty'];
    $allProduct[$key] = $array;
}

includethisView();