<?php

// $query = "SELECT * FROM `order_user` WHERE uid = ? ORDER BY id DESC";
$result = getAllUserOrderBy_uid_DESC($_SESSION['id']);

$AllofMyOrder = array();
foreach ($result as $key => $value) {
    $array = array();
    $array['id'] = $value['id'];
    $array['recive_date'] = $value['recive_date'];
    $array['priceAll'] = $value['priceAll'];
    $orderdeatail = getAllUserOrderItmeByOrderId($value['id']);

    $productImage = array();
    if (is_array($orderdeatail)) {
        foreach ($orderdeatail as $value1) {

            $product = getProductById($value1['pid'])['image_src'];
    
            $productImage[] = $product ;
        }
        $array['products_image'] = $productImage;
        $AllofMyOrder[] = $array;
    }
}
includethisView();