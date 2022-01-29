<?php
$data = getAllLikeProductBy_Uid($_SESSION['id']);

$AllProductArray = array();

foreach ($data as $key=>$value) {
    $data = getProductById($value['pid']);
    $AllProductArray[$key] = $data;
}

includethisView();