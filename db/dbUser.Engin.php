<?php
function getAllUser() {
    $result = getAllDataTable('user','*');
    return $result;
}
function getUser($by){
    return getDataTable('user','*',$by);
}
function getUserBy_username_password($username,$password) {
    $result = getUser(
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
function getUserBy_id($id) {
    $result = getUser(
        array(
            'id'=>$id
            )
    );
    if (count($result) < 0) {
        return false;
    }
    return $result;
}
function getUserBy_email($email) {
    $result = getUser(
        array(
            'email'=>$email
            )
    );
    if (count($result) < 0) {
        return false;
    }
    return $result;
}
function addUser($firstname,$lastname,$email,$city,$phone,$password) {
    $filds = array(
        'firstname'=>$firstname,
        'lastname'=>$lastname,
        'email'=>$email,
        'city'=>$city,
        'phone'=>$phone,
        'password'=>$password,
        'role'=>'user',
    );
    return insertData('user',$filds); 
}
function getNameFamilyById($uid){
    $user = getDataTable('user',
        array('firstname','lastname')
        ,array('id'=>$uid)
    );
    if (isset($user['firstname']) && isset($user['lastname'])) {
        return $user['firstname']." ".$user['lastname'];
    }
    return;
}
