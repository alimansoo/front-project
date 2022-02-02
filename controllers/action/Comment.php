<?php
$status = '';
$dbcomment = new DBCommentEngin();
if (isset($_SESSION['id'])) {
    $productid = Data::get('pid',$_GET);
    $userid = Data::get('id',$_SESSION);
    $subject = Data::get('subject',$_REQUEST);
    $message = Data::get('message',$_REQUEST);

    $data = $dbcomment->add($productid,$userid,$subject,$message);

    $output = array('status' => 200,'message' => 'نظر شما ثبت شد.' );
}
else {
    $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
}



echo json_encode($output);