<?php
$dborder = new DBUserOrderEngin();
$dborderitem = new DBUserOrderItemEngin();
$dbproduct = new DBProductEngin();
$orders = $dborder->getAllBy_uid_DESC($_SESSION['id']);
$OrderArray = array();
$OrderItemArray = array();
$OrderItemProduct = array();
$i=0;
foreach ($orders as $value) {
    $OrderArray[$i]=new Order($value);
    $userorderitems = $dborderitem->getAllByOrderId($OrderArray[$i]->id);
    $OrderItemOnce = array();
    $ProductItemOnce = array();
    foreach ($userorderitems as $key => $value) {
        $OrderItemOnce[]= new OrderItem($value);
        $ProductItemOnce[] = new Product($value['pid']);
    }
    $OrderItemArray[$i] = $OrderItemOnce;
    $OrderItemProduct[$i] = $ProductItemOnce;
    $i++;
}

View::IncludeForThis();