<?php
function getAllProduct() {
    $result = getAllDataTable('product','*');
    return $result;
}
function getAllProductLikeBy($q) {
    $result = getAllDataTable('product','*',null,null,array('name'=>$q));
    return $result;
}
function getProductById($pid) {
    global $cdb;
    if (is_null($pid)) {
        return;
    }
    $result = getDataTable('product','*',array('id'=> $pid));
    return $result;
}
function addProduct($filds) {
    insertData('product',$filds);
}