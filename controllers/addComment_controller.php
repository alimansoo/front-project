<?php 
require '__init__.php';

$status = '';

$productid = $_REQUEST['pid'];
$userid = $_SESSION['id'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "INSERT INTO `comment`( `pid`, `uid`, `subject`, `message`) VALUES (?,?,?,?)";
$result = $mysql->query($query,$productid,$userid,$subject,$message);

echo "added";