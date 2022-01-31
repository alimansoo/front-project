<?php

interface DBEngineLayer1{
    public function select($table_name,$get_filed,$where_filed,$sorting_by,$like_by);
    public function insert($table_name,$insert_filed);
    public function update($table_name,$update_filed ,$where_filed);
    public function delete($table_name,$where_filed);
}
interface DBEngineLayer2{
    public function getAll($where_filed,$sorting_by,$like_by,$result_all);
    public function getFilds($get_filed,$where_filed,$sorting_by,$like_by,$result_all);
    public function insertData($insert_filed);
    public function updateData($update_filed ,$where_filed);
    public function deleteData($where_filed);
}

$cdb = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

abstract class DBEngine implements DBEngineLayer1
{
    public function select($table_name, $get_filed, $where_filed=null, $sorting_by=null, $like_by=null)
    {
        global $cdb;
        if (!is_string($table_name)) {
            return;  
        }
        $fileds = $get_filed;
        if (is_array($get_filed)) {
            foreach ($get_filed as $key => $value) {
                $fileds[$key] = '`'.$value.'`';
            }
    
            $fileds = implode(',',$fileds);
        }elseif(strpos($get_filed,',')){
            echo "if you want more than on you shold pass an array";
            return;
        }elseif ($get_filed !== '*') {
            $fileds = '`'.$get_filed.'`';
        }
    
        if(is_null($where_filed)){
            $query = "SELECT $get_filed FROM `$table_name`";
        }elseif (!is_array($where_filed)) {
            return; 
        }else{
            $where =array();
            foreach ($where_filed as $key => $value) {
                if (is_int($value)) {
                    $where[]= '`'.$key."`='".$value."'";
                } else {
                    $where[]= '`'.$key."`='".$value."'";
                }
                
            }
            
            $where = implode(' AND ',$where);
            $query = "SELECT $fileds FROM `$table_name` WHERE $where";
        }
        //ORDER BY
        if (!is_null($sorting_by) and is_array($sorting_by)) {
            $sort =array();
            foreach ($sorting_by as $key => $value) {
                $sort[]= ' ORDER BY `'.$key."` ".$value."";
            }
            $query .= implode(' AND ',$sort);
        }
        //LIKE BY
        if (!is_null($like_by) and is_null($where_filed)) {
            $like =array();
            $query .= ' WHERE';
            foreach ($like_by as $key => $value) {
                $like[]= '`'.$key."` LIKE '%".$value."%'";
            }
            $query .= implode(',',$like);
        }
        echo $query.'<br>';
        return $cdb->query($query);
    }
    public function update($table_name, $update_filed ,$where_filed)
    {
        global $cdb;
        if (!is_string($table_name)) {
            return;  
        }

        if (!is_array($update_filed)) {
            return;
        }

        if (!is_array($where_filed)) {
            return;
        }

        $filedsarray =array();
        foreach ($update_filed as $key => $value) {
            if (is_int($value)) {
                $filedsarray[]= '`'.$key."`='".$value."'";
            } else {
                $filedsarray[]= '`'.$key."`='".$value."'";
            }
            
        }
        $filedsarray = implode(',',$filedsarray);

        $where =array();
        foreach ($where_filed as $key => $value) {
            if (is_int($value)) {
                $where[]= '`'.$key."`='".$value."'";
            } else {
                $where[]= '`'.$key."`='".$value."'";
            }
            
        }
        $where = implode(',',$where);
        $query = "UPDATE `$table_name` SET $filedsarray WHERE $where";
        echo $query.'<br>';
        return $cdb->query($query);
    }
    public function insert($table_name, $insert_filed)
    {
        global $cdb;
        
        if (!is_string($table_name)) {
            return;  
        }
        
        if (!is_array($insert_filed)) {
            return;
        }
        $keys = array();
        foreach ($insert_filed as $key => $value) {
            $keys[] = '`'.$key.'`';
        }
        $keys = '('.implode(',',$keys).')';

        $values = array();
        foreach ($insert_filed as $key => $value) {
            $values[] = "'".$value."'";
        }
        $values = '('.implode(',',$values).')';

        $query = "INSERT INTO `$table_name` $keys VALUES $values";
        echo $query.'<br>';
        return $cdb->query($query)->lastInsertID();
    }
    public function delete($table_name, $where_filed)
    {
        global $cdb;
        if (!is_string($table_name)) {
            return;  
        }
        if (!is_array($where_filed)) {
            return;
        }
        $where =array();
        foreach ($where_filed as $key => $value) {
            if (is_int($value)) {
                $where[]= '`'.$key."`='".$value."'";
            } else {
                $where[]= '`'.$key."`='".$value."'";
            }
            
        }
        $where = implode(' AND ',$where);
        $query = "DELETE FROM `$table_name` WHERE $where";
        echo $query.'<br>';
        return $cdb->query($query);
    }
}