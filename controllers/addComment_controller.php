<?php
$status = '';

if (isset($_SESSION['id'])) {
    $productid = $RoutingData[0];
    $userid = $_SESSION['id'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    $mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

    $query = "INSERT INTO `comment`( `pid`, `uid`, `subject`, `message`) VALUES (?,?,?,?)";
    $result = $mysql->query($query,$productid,$userid,$subject,$message);

    $output = array('status' => 200,'message' => 'نظر شما ثبت شد.' );
}
else {
    $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
}



echo json_encode($output);