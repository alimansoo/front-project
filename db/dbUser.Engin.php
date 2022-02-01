<?php
class DBUserEngin extends DBEngine implements DBEngineLayer2
{
    private $TABLE_NAME = 'user';
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
        if (count($result) < 0) {
            return false;
        }
        return $result;
    }
    public function getBy_username_password($username,$password) {
        $result = $this->getAll(
            array(
                'email'=>$username,
                'password'=>$password
            )
        );
        if (count($result) < 0) {
            return false;
        }
        return $result;
    }
    public function getBy_id($id) {
        $result = $this->getAll(
            array(
                'id'=>$id
            )
        );
        if (count($result) < 0) {
            return false;
        }
        return $result;
    }
    public function getBy_email($email) {
        $result = $this->getAll(
            array(
                'email'=>$email
            )
        );
        if (count($result) < 0) {
            return false;
        }
        return $result;
    }
    public function add($firstname,$lastname,$email,$city,$phone,$password) {
        $filds = array(
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'city'=>$city,
            'phone'=>$phone,
            'password'=>$password,
            'role'=>'user',
        );
        return $this->insertData($filds); 
    }
    public function getNameFamilyById($uid){
        $user = $this->getFilds(
            array('firstname','lastname'),
            array('id'=>$uid)
        );
        if (isset($user['firstname']) && isset($user['lastname'])) {
            return $user['firstname']." ".$user['lastname'];
        }
        return;
    }
}