<?php
if (!isset($_POST['submit'])) {
    View::IncludeForThis();
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
                Rout::full_url('userpanel.dashboard')
            );
        }
    }
    else {
        die('Email is not uniqe');
    }
}
