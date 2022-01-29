<?php
$cdb = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);
/*
      Layer  1
*/
function getAllDataTable($table,$fileds,$by=null,$sorting=null,$likeby=null) {
    global $cdb;
    if (!is_string($table)) {
        return;  
    }

    if (is_array($fileds)) {
        foreach ($fileds as $key => $value) {
            $fileds[$key] = '`'.$value.'`';
        }

        $fileds = implode(',',$fileds);
    }elseif(strpos($fileds,',')){
        echo "if you want more than on you shold pass an array";
        return;
    }elseif ($fileds !== '*') {
        $fileds = '`'.$fileds.'`';
    }

    if(is_null($by)){
        $query = "SELECT $fileds FROM `$table`";
    }elseif (!is_array($by)) {
        return; 
    }else{
        $where =array();
        foreach ($by as $key => $value) {
            if (is_int($value)) {
                $where[]= '`'.$key."`='".$value."'";
            } else {
                $where[]= '`'.$key."`='".$value."'";
            }
            
        }
        
        $where = implode(' AND ',$where);
        $query = "SELECT $fileds FROM `$table` WHERE $where";
    }
    if (!is_null($sorting)) {
        $sort =array();
        foreach ($sorting as $key => $value) {
            $sort[]= ' ORDER BY `'.$key."` ".$value."";
        }
        $query .= implode(',',$sort);
    }
    if (!is_null($likeby)) {
        $like =array();
        $query .= 'WHERE';
        foreach ($likeby as $key => $value) {
            $like[]= '`'.$key."` LIKE '%".$value."%'";
        }
        $query .= implode(',',$like);
    }
    // echo $query.'<br>';
    $result = $cdb -> query($query)->fetchAll();
    return $result;
}


function getDataTable($table,$fileds,$by) {
    global $cdb;
    if (!is_string($table)) {
        return;  
    }

    if (is_array($fileds)) {
        foreach ($fileds as $key => $value) {
            $fileds[$key] = '`'.$value.'`';
        }

        $fileds = implode(',',$fileds);
    }elseif(strpos($fileds,',')){
        echo "if you want more than on you shold pass an array";
        return;
    }elseif ($fileds !== '*') {
        $fileds = '`'.$fileds.'`';
    }

    if(is_null($by)){
        $query = "SELECT $fileds FROM `$table`";
    }elseif (!is_array($by)) {
        return;
    }else{
        $where =array();
        foreach ($by as $key => $value) {
            if (is_int($value)) {
                $where[]= '`'.$key."`='".$value."'";
            } else {
                $where[]= '`'.$key."`='".$value."'";
            }
            
        }
        
        $where = implode(' AND ',$where);
        $query = "SELECT $fileds FROM `$table` WHERE $where";
    } 
    $result = $cdb -> query($query)->fetchArray();
    return $result;
}

function insertData($table,$fileds){
    global $cdb;

    if (!is_string($table)) {
        return;  
    }

    if (!is_array($fileds)) {
        return;
    }
    $keys = array();
    foreach ($fileds as $key => $value) {
        $keys[] = '`'.$key.'`';
    }
    $keys = '('.implode(',',$keys).')';

    $values = array();
    foreach ($fileds as $key => $value) {
        $values[] = "'".$value."'";
    }
    $values = '('.implode(',',$values).')';

    $query = "INSERT INTO `$table` $keys VALUES $values";
    $result = $cdb -> query($query);
    return $cdb->lastInsertID();
}

function deleteData($table,$by){
    global $cdb;
    if (!is_string($table)) {
        return;  
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
    $where = implode(',',$where);
    $query = "DELETE FROM `$table` WHERE $where";
    $result = $cdb -> query($query);
}

function updateData($table,$fileds,$by){
    global $cdb;
    if (!is_string($table)) {
        return;  
    }

    if (!is_array($fileds)) {
        return;
    }

    if (!is_array($by)) {
        return;
    }

    $filedsarray =array();
    foreach ($fileds as $key => $value) {
        if (is_int($value)) {
            $filedsarray[]= '`'.$key."`='".$value."'";
        } else {
            $filedsarray[]= '`'.$key."`='".$value."'";
        }
        
    }
    $filedsarray = implode(',',$filedsarray);

    $where =array();
    foreach ($by as $key => $value) {
        if (is_int($value)) {
            $where[]= '`'.$key."`='".$value."'";
        } else {
            $where[]= '`'.$key."`='".$value."'";
        }
        
    }
    $where = implode(',',$where);
    $query = "UPDATE `$table` SET $filedsarray WHERE $where";
    $result = $cdb -> query($query);
}