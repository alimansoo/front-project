<?php
$dbuser = new DBUserEngin();
if (!isset($_POST['submit'])) {
    includethisView();
}else {
    $data = $dbuser->getBy_username_password(
        $_POST['email'],$_POST['password']
    );
    if ($data) {
        //set sessions
        Athuntication::loginUser($data);
        switch ($_SESSION['role']) {
            case 'user':
                redirect_to_url('userpanel.dashboard');
                break;
            case 'admin':
                redirect_to_url('adminpanel.dashboard');
                break;
            default:
                die("error");
        }
    }else {
        redirect_to_url('home');
    }
}