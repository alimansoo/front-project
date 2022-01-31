<?php
$dborder = new DBUserOrderEngin();
$dborderitem = new DBUserOrderItemEngin();
$dbproduct = new DBProductEngin();
$data = $dborder->getAllBy_uid_DESC($_SESSION['id']);

$AllofMyOrder = array();
foreach ($data as $key => $value) {
    $array = array();
    $array['id'] = $value['id'];
    $array['recive_date'] = $value['recive_date'];
    $array['priceAll'] = $value['priceAll'];
    $AllorderItem = $dborderitem->getAllByOrderId($value['id']);
    $productImage = array();
    foreach ($AllorderItem as $orderItem) {
        if (is_array($orderItem)) {
            $product = $dbproduct->getById($orderItem['pid']);
            $productImage[] = $product ;
        }
        $array['AllProduct_image'] = $productImage;
    }
    $AllofMyOrder[] = $array;
}
includethisView();