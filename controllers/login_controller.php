<?php
require_once("__init__.php");

if (!isset($_POST['submit'])) {
    $filename = explode('_',basename(__FILE__))[0];
    include $viewroot.$filename.'_view.php';
}else {
    $cdb = new db($dbhost,$dbusername,$dbpassword,$dbname);
    
    $query = "SELECT * FROM `user` WHERE `email`='{$_POST['email']}' AND `password` = '{$_POST['password']}';";
    $result = $cdb -> query($query)->fetchArray();
    $cdb -> close();

    // if ($result['firstn']) {
    
    // }
    if (count($result)>0) {
        //set sessions
        Athuntication::loginUser($result);
        $_SESSION['back_status'] = 200;
        switch ($_SESSION['role']) {
            case 'user':
                header("Location:UserPanel_controller.php");
                break;
            case 'admin':
                header("Location:{$baseroot}Admin/controller/Dashboard_controller.php");
                break;
            default:
                echo "error";
        }
    }else {
        $_SESSION['back_status'] = 405;
        echo "<p>کاربری با این اطلاعات وجود ندارد</p>";
        echo "<a href='./home_controller.php'>خانه</a>";
    }

}