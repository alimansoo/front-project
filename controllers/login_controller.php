<?php
if (!isset($_POST['submit'])) {
    $filename = explode('_',basename(__FILE__))[0];
    include viewroot.$filename.'_view.php';
}else {
    $cdb = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);
    
    $query = "SELECT * FROM `user` WHERE `email`='{$_POST['email']}' AND `password` = '{$_POST['password']}';";
    $result = $cdb -> query($query)->fetchArray();
    $cdb -> close();

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