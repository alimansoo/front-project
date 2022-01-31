<?php
$dbuser = new DBUserEngin();
if (!isset($_POST['submit'])) {
    View::IncludeForThis();
}else {
    $data = $dbuser->getBy_username_password(
        Data::get('email',$_POST),Data::get('password',$_POST)
    );
    if ($data) {
        //set sessions
        Athuntication::loginUser($data);
        $role = Data::get('role',$_SESSION);
        switch ($role) {
            case 'user':
                Rout::redirect_to_url('userpanel.dashboard');
                break;
            case 'admin':
                Rout::redirect_to_url('adminpanel.dashboard');
                break;
            default:
                die("error");
        }
    }else {
        Rout::redirect_to_url('home');
    }
}