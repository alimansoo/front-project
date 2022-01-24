<?php
/*
      Layer  2
*/
function getAllCartByUserId($uid=null) {
    global $cdb;
    if (is_null($uid)) {
        return;
    }
    $result = getAllDataTable(
        'cards',
        '*',
        array('uid'=>$uid)
    );
    return $result;
}
function getCartBy_Pid_Uid($pid,$uid) {
    global $cdb;
    $result = getDataTable(
        'cards',
        '*',
        array(
            'pid'=>$pid,
            'uid'=>$uid
            )
    );
    if(count($result) < 0 ){
        return false;
    }
    return $result;
}
function getCartBy_id($cartid) {
    global $cdb;
    $result = getDataTable(
        'cards',
        '*',
        array(
            'id'=>$cartid
        )
    );
    if(count($result) < 0 ){
        return false;
    }
    return $result;
}
function isContainCard($id)
{
    $result = getCartBy_Pid_Uid($id,$_SESSION['id']);
    if(count($result) > 0 ){
        return true;
    }
    return false;
}
function deleteCartByid($id){
    deleteData('cards',array('id'=>$id));
}
function insertCard($pid,$uid)
{
    insertData('cards',array('uid'=>$uid,'pid'=>$pid,'qty'=>1));
}
function changeQtyCard($action,$cartid){

    $result = getCartBy_id($cartid);
    if (count($result) < 1) {
        return -1;
    }
    // var_dump($result);
    $productqty = $result['qty'];
    // 

    switch ($action) {
        case 'add':
            $productqty++;
            break;
        case 'minus':
            $productqty--;
            break;
    }
    if ($productqty < 1) {
        deleteCartByid($cartid);
        return 0;
    }
    updateData(
            'cards',
            array('qty'=>$productqty),
            array('id'=>$cartid)
        );
    return $productqty;
}