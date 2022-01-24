<?php

function insertUserOrderItem($orderId,$ProducId,$ProductQty){
    $fileds = array(
        'oid'=>$orderId,
        'pid'=>$ProducId,
        'qty'=>$ProductQty
    );
    return insertData('order_user_item',$fileds);
}
function getAllUserOrderItmeByOrderId($orderId)
{
    $result = getAllDataTable(
        'order_user_item',
        '*',
        array(
            'oid'=>$orderId
        )
    );
    if (count($result) < 1) {
        return false;
    }
    return $result;
}