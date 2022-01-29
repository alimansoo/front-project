<?php
if (!isset($_POST['submit'])) {
    includethisView();
}else {
    $data = getUserBy_username_password(
        $_POST['email'],$_POST['password']
    );

    if ($data) {
        //set sessions
        Athuntication::loginUser($data);
        switch ($_SESSION['role']) {
            case 'user':
                redirect_to(
                    get_Full_URL('userpanel.dashboard')
                );
                break;
            case 'admin':
                redirect_to(
                    get_Full_URL('adminpanel.dashboard')
                );
                break;
            default:
                die("error");
        }
    }else {
        redirect_to(
            get_Full_URL('home')
        );
    }
}