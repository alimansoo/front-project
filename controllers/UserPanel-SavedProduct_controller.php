<?php
$dbbookmark = new DBProductBookmarkEngin();
$dbprdouct = new DBProductEngin();
$data = $dbbookmark->getAllBy_Uid($_SESSION['id']);
$AllProductArray = array();

foreach ($data as $key=>$value) {
    $data = $dbprdouct->getById($value['pid']);
    $AllProductArray[$key] = $data;
}

View::IncludeForThis();