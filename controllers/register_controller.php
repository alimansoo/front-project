<?php
if (!isset($_POST['submit'])) {
    includethisView();
}else {
    $data = getUserBy_email($_POST['email']);
    if(!$data){
        $userId = addUser(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['citi'],
            $_POST['phone'],
            $_POST['password']
        );
        if ($userId) {
            $data = getUserBy_id($userId);
            Athuntication::loginUser($data);
            redirect_to(
                get_Full_URL('userpanel.dashboard')
            );
        }
    }
    else {
        die('Email is not uniqe');
    }
}