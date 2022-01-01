<?php 
require '__init__.php';

$orderid=$_SESSION['orderid'];
unset($_SESSION['orderid']);

$status = "";

if ($_SESSION['is_payed']) {
    $status = "success";
    
    $mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);
    $query = "UPDATE `order_user` SET `is_pay`= true WHERE id =?";
    $result = $mysql->query($query,$orderid);

    $query = "SELECT * FROM `order_user` WHERE id =?";
    $order_deatail = $mysql->query($query,$orderid)->fetchArray();

}else{
    $status = "failed";
}

include $viewroot."finalPage_view.php";