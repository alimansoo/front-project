<?php


function getBookmarkProductBy_Pid_Uid($pid,$uid) {
    global $cdb;
    $result = getDataTable(
        'bookmarkproduct',
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
function getAllBookmarkProductBy_Uid($uid) {
    global $cdb;
    $result = getAllDataTable(
        'bookmarkproduct',
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
function deleteBookmarkProductByid($id){
    deleteData('bookmarkproduct',array('id'=>$id));
}
function insertBookmarkProduct($pid,$uid)
{
    insertData('bookmarkproduct',array('uid'=>$uid,'pid'=>$pid));
}