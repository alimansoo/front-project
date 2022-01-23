<?php

$cdb = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

function getAllCartByUserId($uid=null) {
    global $cdb;
    if (is_null($uid)) {
        return;
    }
    $query = "SELECT * FROM `cards` WHERE uid = ?";
    $result = $cdb -> query($query,$uid)->fetchAll();
    return $result;
}
function getCartBy($filds,$by) {
    global $cdb;
    if (is_array($filds)) {
        foreach ($filds as $key => $value) {
            $filds[$key] = '`'.$value.'`';
        }
        $filds = implode(',',$filds);
    }
    if (!is_array($by)) {
        return;
    }
    $where =array();
    foreach ($by as $key => $value) {
        if (is_int($value)) {
            $where[]= '`'.$key."`='".$value."'";
        } else {
            $where[]= '`'.$key."`='".$value."'";
        }
        
    }
    $where = implode(' AND ',$where);
    $query = "SELECT $filds FROM `cards` WHERE $where";
    // echo $query;
    $result = $cdb -> query($query)->fetchArray();
    return $result;
}
function getCartByPid_Uid($pid,$uid) {
    global $cdb;
    $query = "SELECT * FROM `cards` WHERE `pid`=? AND `uid`=?";
    $result = $cdb -> query($query,$pid,$uid)->fetchArray();
    return $result;
}