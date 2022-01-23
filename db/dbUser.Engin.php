<?php

$cdb = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);
function getAllUser() {
    global $cdb;
    $query = "SELECT * FROM `user`";
    $result = $cdb -> query($query)->fetchAll();
    return $result;
}
function getUserBy($filds,$by) {
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
    $query = "SELECT $filds FROM `user` WHERE $where";
    $result = $cdb -> query($query)->fetchArray();
    return $result;
}
function addUser($filds) {
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
    $query = "INSERT INTO `user` $keys VALUES $values";
    $result = $cdb -> query($query);
    return $cdb->lastInsertID();
}