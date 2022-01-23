<?php
if (!isset($_POST['submit'])) {
    includethisView();
}else {
    $result = getUserBy(
        '*',
        array('email'=>$_POST['email']
        ,'password'=>$_POST['password'])
    );

    if (count($result)>0) {
        //set sessions
        Athuntication::loginUser($result);
        $_SESSION['back_status'] = 200;
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