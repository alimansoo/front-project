<?php
$status = '';
$dbcomment = new DBCommentEngin();
if (isset($_SESSION['id'])) {
    $productid = $_GET['pid'];
    $userid = $_SESSION['id'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    $data = $dbcomment->add($productid,$userid,$subject,$message);

    $output = array('status' => 200,'message' => 'نظر شما ثبت شد.' );
}
else {
    $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
}



echo json_encode($output);