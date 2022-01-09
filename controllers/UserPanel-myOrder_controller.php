<?php 
require '__init__.php';

$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$query = "SELECT * FROM `order_user` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

// echo "<pre>";
// var_dump($result);
// echo "</pre>";

$i = 0;
$AllofMyOrder = array();
foreach ($result as $key => $value) {
    $array = array();
    $array['id'] = $value['id'];
    $array['recive_date'] = $value['recive_date'];
    $array['priceAll'] = $value['priceAll'];

    $query = "SELECT * FROM `order_user_item` WHERE oid = ?";
    $orderdeatail = $mysql->query($query,$value['id'])->fetchAll();

    $productImage = array();
    foreach ($orderdeatail as $key1 => $value1) {

        $query = "SELECT image_src FROM `product` WHERE id = ?";
        $product = $mysql->query($query,$value1['pid'])->fetchAll();

        foreach ($product as $key2 => $value2) {
            $productImage[$key1] = $value2['image_src'] ;
        }
    }
    $array['products_image'] = $productImage;
    $AllofMyOrder[$i] = $array;
    $i++;
}

$filename = explode('_',basename(__FILE__))[0];
include viewroot.$filename.'_view.php';