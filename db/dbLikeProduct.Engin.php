<?php
class DBLikeProductEngin extends DBEngine implements DBEngineLayer2
{
    private $TABLE_NAME = 'likeproduct';
    public function getAll($where_filed=null, $sorting_by=null, $like_by=null,$result_all=false)
    {
        $result=$this->select(
            $this->TABLE_NAME,
            '*',
            $where_filed,
            $sorting_by,
            $like_by
        );
        if ($result_all) {
            return $result->fetchAll();
        } else {
            return $result->fetchArray();
        }
    }
    public function getFilds($get_filed, $where_filed=null, $sorting_by=null, $like_by=null,$result_all=false)
    {
        $result=$this->select(
            $this->TABLE_NAME,
            $get_filed,
            $where_filed,
            $sorting_by,
            $like_by
        );
        if ($result_all) {
            return $result->fetchAll();
        } else {
            return $result->fetchArray();
        }
    }
    public function insertData($insert_filed)
    {
        $result=$this->insert(
            $this->TABLE_NAME,
            $insert_filed
        );
        return $result;
    }
    public function updateData($update_filed, $where_filed)
    {
        $result=$this->update(
            $this->TABLE_NAME,
            $update_filed,
            $where_filed
        );
        return $result;
    }
    public function deleteData($where_filed)
    {
        $result=$this->delete(
            $this->TABLE_NAME,
            $where_filed
        );
        return $result;
    }
    /* 
            Custome Function
    */
    public function isContain($pid,$uid){
        $result = $this->getAll(
            array('pid'=>$pid,'uid'=>$uid)
        );
        if(count($result) > 0 ){
            return true;
        }
        return false;
    }
    
    public function getBy_Pid_Uid($pid,$uid) {
        $result = $this->getAll(
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
    function getAllBy_Uid($uid) {
        $result = $this->getAll(
            array(
                'uid'=>$uid
            ),
            null,
            null,
            true
        );
        if(count($result) < 0 ){
            return false;
        }
        return $result;
    }
    function deleteByid($id){
        $this->deleteData(array('id'=>$id));
    }
    function add($pid,$uid)
    {
        $this->insertData(array('uid'=>$uid,'pid'=>$pid));
    }
}
