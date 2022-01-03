<?php 
require '__init__.php';

if (!isset($_POST['submit'])) {
    include_once($viewroot.'reqister_view.php');
}else {

    $cdb = new db($dbhost,$dbusername,$dbpassword,$dbname);
    
    $query = "INSERT INTO `user`
    ( `firstname`, `lastname`, `email`, `city`, `phone`,`password`, `role`)
     VALUES (?,?,?,?,?,?,'user')";
    $result = $cdb -> query($query,$_POST['firstname'],$_POST['lastname'],$_POST['email']
    ,$_POST['citi'],$_POST['phone'],$_POST['password']);
    
    
    $query = "SELECT * FROM `user` WHERE `email`=? AND `password`=?";
    $result = $cdb -> query($query,$_POST['email'],$_POST['password'])->fetchArray();

    Athuntication::loginUser($result);

    $cdb -> close();

    header("Location:UserPanel_controller.php");
}