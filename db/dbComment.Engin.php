<?php
class DBCommentEngin extends DBEngine implements DBEngineLayer2
{
    private $TABLE_NAME = 'comment';
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
    public function getAllofThem()
    {
        $result = $this->getAll(
            null,
            null,
            null,
            true
        );
        if(count($result) < 0 ){
            return false;
        }
        return $result;
    }
    public function getAllBy_pid($productId) {
        $result = $this->getAll(
            array(
                'pid'=>$productId
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
    public function getById($id) {
        $result = $this->getAll(
            array(
                'id'=>$id
            )
        );
        if(count($result) < 0 ){
            return false;
        }
        return $result;
    }
    public function add($productId,$userId,$subject,$content){
        $data = array(
            'pid'=>$productId,
            'uid'=>$userId,
            'subject'=>$subject,
            'message'=>$content
        );
        $this->insertData($data);
    }
}