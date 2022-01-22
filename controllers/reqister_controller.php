<?php 
require '__init__.php';

if (!isset($_POST['submit'])) {
    $filename = explode('_',basename(__FILE__))[0];
    include viewroot.$filename.'_view.php';
}else {

    
    $query = "SELECT `email` FROM `user` `email`=?";
    $result = $cdb -> query($query,$_POST['email'])->fetchArray();
    if(count($result) < 1){
        $query = "INSERT INTO `user`
        ( `firstname`, `lastname`, `email`, `city`, `phone`,`password`, `role`)
        VALUES (?,?,?,?,?,?,'user')";
        $result = $cdb -> query($query,$_POST['firstname'],$_POST['lastname'],$_POST['email']
        ,$_POST['citi'],$_POST['phone'],$_POST['password']);
    }
    else {
        die('Email is not uniqe');
    }
    
    
    
    $query = "SELECT * FROM `user` WHERE `email`=? AND `password`=?";
    $result = $cdb -> query($query,$_POST['email'],$_POST['password'])->fetchArray();

    Athuntication::loginUser($result);

    $cdb -> close();

    header("Location:UserPanel_controller.php");
}