<?php
$cdb = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

function getAllProduct() {
    global $cdb;
    $query = "SELECT * FROM `product`";
    $result = $cdb -> query($query)->fetchAll();
    return $result;
}
function getProductById($pid) {
    global $cdb;
    if (is_null($pid)) {
        return;
    }
    $query = "SELECT * FROM `product` WHERE id=?";
    $result = $cdb -> query($query,$pid)->fetchArray();
    return $result;
}
function addProduct($filds) {
    global $cdb;
    if (!is_array($filds)) {
        return;
    }
    $keys = array();
    foreach ($filds as $key => $value) {
        $keys[] = '`'.$key.'`';
    }
    $keys = '('.implode(',',$keys).')';
    $values = array();
    foreach ($filds as $key => $value) {
        $values[] = "'".$value."'";
    }
    $values = '('.implode(',',$values).')';
    $query = "INSERT INTO `product` $keys VALUES $values";
    $result = $cdb -> query($query);
    return $cdb->lastInsertID();
}