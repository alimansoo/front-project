<?php
require "__init__.php";
//status 600 ===> یک پیام جدید وجود دارد
//       500 ===> پیام شما ثبت شد.
//       100 ===> هنوز لاگین نکردی
//       550 ===> پیام جدیدی نیست
// id 0 ===> admin
$output = array();

if (isset($_SESSION['id'])) {
    $mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);
    if (isset($_POST['submit'])) {

        $chatmessage = $_POST['chatmessage'];

        $query = "INSERT INTO `chat`(`sender_id`, `message`, `is_read`,`reciver_id`) VALUES (?,?,false,0)";
        $result = $mysql->query($query,$_SESSION['id'],$chatmessage);
    
        $output = array('status' => 500, 'chatmessage'=>$chatmessage);
    }else{
        $query = "SELECT * FROM `chat` WHERE `is_read` = false AND `reciver_id` =?";
        $result = $mysql->query($query,$_SESSION['id'])->fetchArray();

        if ((count($result) > 0)) {
                $output = array('status' => 600, 'chatmessage'=>$result['message']);

                $query = "UPDATE `chat` SET `is_read`=true WHERE id = ?";
                $result = $mysql->query($query,$result['id']);
        }else {
            $output = array('status' => 550);
        }
    }
}else{
    $output = array('status' => 100, 'message'=>'لاکین نیستی آخه');
}

echo json_encode($output);