<?php
$dblike = new DBLikeProductEngin();
$dbprdouct = new DBProductEngin();
$data = $dblike->getAllBy_Uid($_SESSION['id']);

$AllProductArray = array();

foreach ($data as $key=>$value) {
    $data = $dbprdouct->getById($value['pid']);
    $AllProductArray[$key] = $data;
}

includethisView();