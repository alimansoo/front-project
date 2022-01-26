<?php
if (!isset($_POST['submit'])) {
    includethisView();
}else {
    $result = getUserBy_email($_POST['email']);
    if(!$result){
        $userId = addUser(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['citi'],
            $_POST['phone'],
            $_POST['password']
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
