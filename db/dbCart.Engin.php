<?php
class DBCartEngin extends DBEngine implements DBEngineLayer2
{
    private $TABLE_NAME = 'cards';
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
    public function deleteData($where_filed,$result_all=false)
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
    public function getAllByUid($uid) {
        return $this->getAll(
            array('uid'=>$uid),
            null,
            null,
            true
        );
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
    public function getBy_id($cartid) {
        $result = $this->getAll(
            array(
                'id'=>$cartid
            )
        );
        if(count($result) < 0 ){
            return false;
        }
        return $result;
    }
    public function isContainCard($id){
        $result = $this->getBy_Pid_Uid(
            $id,$_SESSION['id']
        );
        if($result){
            return true;
        }
        return false;
    }
    public function deleteByid($id){
        $this->deleteData(array('id'=>$id));
    }
    public function add($pid,$uid)
    {
        $this->insertData(array('uid'=>$uid,'pid'=>$pid,'qty'=>1));
    }
    public function changeQtyCard($action,$cartid){
        $result = $this->getBy_id($cartid);
        if (count($result) < 1) {
            return -1;
        }
        $productqty = $result['qty'];
    
        switch ($action) {
            case 'add':
                $productqty++;
                break;
            case 'minus':
                $productqty--;
                break;
        }
        if ($productqty < 1) {
            $this->deleteByid($cartid);
            return 0;
        }
        $this->updateData(
                array('qty'=>$productqty),
                array('id'=>$cartid)
            );
        return $productqty;
    }
}