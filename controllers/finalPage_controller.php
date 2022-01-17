<?php 
require '__init__.php';

$orderid=$_SESSION['orderid'];


$status = "";

if ($_SESSION['is_payed']) {
    $status = "success";
    
    $mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);
    $query = "UPDATE `order_user` SET `is_pay`= true WHERE id =?";
    $result = $mysql->query($query,$orderid);

    $query = "SELECT * FROM `order_user` WHERE id =?";
    $order_deatail = $mysql->query($query,$orderid)->fetchArray();

}else{
    $status = "failed";
}

unset($_SESSION['orderid']);
unset($_SESSION['is_payed']);

$filename = explode('_',basename(__FILE__))[0];
include viewroot.$filename.'_view.php';