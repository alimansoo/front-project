<?php
function Is_Product_like($pid,$uid){
    getDataTable(
        'likeproduct',
        '*',
        array('pid'=>$pid,'uid'=>$uid)
    );
}

function getLikeProductBy_Pid_Uid($pid,$uid) {
    global $cdb;
    $result = getDataTable(
        'likeproduct',
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
function getAllLikeProductBy_Uid($uid) {
    global $cdb;
    $result = getAllDataTable(
        'likeproduct',
        '*',
        array(
            'uid'=>$uid
            )
    );
    if(count($result) < 0 ){
        return false;
    }
    return $result;
}
function deleteLikeProductByid($id){
    deleteData('likeproduct',array('id'=>$id));
}
function insertLikeProduct($pid,$uid)
{
    insertData('likeproduct',array('uid'=>$uid,'pid'=>$pid));
}