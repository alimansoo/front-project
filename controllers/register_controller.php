<?php
if (!isset($_POST['submit'])) {
    includethisView();
}else {
    $result = getUserBy_email($_POST['email']);
    if(!$result){
        $userId = addUser(
            array(
                'firstname'=>$_POST['firstname'],
                'lastname'=>$_POST['lastname'],
                'email'=>$_POST['email'],
                'city'=>$_POST['citi'],
                'phone'=>$_POST['phone'],
                'password'=>$_POST['password'],
                'role'=>'user',
            )
        );
        if ($userId) {
            $result = getUserBy_id($userId);
            Athuntication::loginUser($result);
            redirect_to(
                get_Full_URL('userpanel.dashboard')
            );
        }
    }
    else {
        die('Email is not uniqe');
    }
}
