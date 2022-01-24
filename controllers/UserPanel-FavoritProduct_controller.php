<?php
$result = getAllLikeProductBy_Uid($_SESSION['id']);

$productsArray = array();

foreach ($result as $key=>$value) {
    $result = getProductById($value['pid']);
    $productsArray[$key] = $result;
}

includethisView();