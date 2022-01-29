<?php

$data = getAllUserOrderBy_uid_DESC($_SESSION['id']);
$AllofMyOrder = array();
foreach ($data as $key => $value) {
    $array = array();
    $array['id'] = $value['id'];
    $array['recive_date'] = $value['recive_date'];
    $array['priceAll'] = $value['priceAll'];
    $orderdeatail = getAllUserOrderItmeByorderId($value['id']);

    $productImage = array();
    if (is_array($orderdeatail)) {
        foreach ($orderdeatail as $value1) {

            $product = getProductById($value1['pid'])['image_src'];
    
            $productImage[] = $product ;
        }
        $array['AllProduct_image'] = $productImage;
        $AllofMyOrder[] = $array;
    }
}
includethisView();