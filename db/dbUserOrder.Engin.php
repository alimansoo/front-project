<?php

function getUserOrderById($oid)
{
    $result = getDataTable(
        'order_user',
        '*',
        array(
            'id'=>$oid
        )
    );
    if (count($result) < 1) {
        return false;
    }
    return $result;
}
function insertUserOrder($userid,$reciveDate,$addres,$priceofall,$transportprice,$recivername){
    $datetime = new DateTime();
    $today = $datetime->format('Y-m-d H:i:s');
    $fileds = array(
        'uid'=>$userid,
        'recive_date'=>$reciveDate,
        'saved_date'=>$today,
        'addres'=>$addres,
        'priceAll'=>$priceofall,
        'transport_price'=>$transportprice,
        'reciver_name'=>$recivername,
        'is_pay'=>false,
    );
    return insertData('order_user',$fileds);
}
function UserOrderPayed($oid){
    updateData(
        'order_user',
        array('is_pay'=>true),
        array('id'=>$oid)
    );
}
function getAllUserOrderBy_uid_DESC($userid)
{
    $result = getAllDataTable(
        'order_user',
        '*',
        array(
            'uid'=>$userid
        )
        ,array(
            'id'=>'DESC'
        )
    );
    if (count($result) < 1) {
        return false;
    }
    return $result;
}
