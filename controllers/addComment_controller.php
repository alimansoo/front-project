<?php 
require '__init__.php';

$status = '';

if (isset($_SESSION['id'])) {
    $productid = $_REQUEST['pid'];
    $userid = $_SESSION['id'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    $mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

    $query = "INSERT INTO `comment`( `pid`, `uid`, `subject`, `message`) VALUES (?,?,?,?)";
    $result = $mysql->query($query,$productid,$userid,$subject,$message);

    $output = array('status' => 200,'message' => 'نظر شما ثبت شد.' );
}
else {
    $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
}



echo json_encode($output);