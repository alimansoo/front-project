<?php
//status 600 ===> یک پیام جدید وجود دارد
//       500 ===> پیام شما ثبت شد.
//       100 ===> هنوز لاگین نکردی
//       550 ===> پیام جدیدی نیست
// id 0 ===> admin
$output = array();

if (isset($_SESSION['id'])) {
    $mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);
    if (isset($_POST['submit'])) {

        $reciverid = $_GET['reciver_id'];

        $chatmessage = $_POST['chatmessage'];

        $query = "INSERT INTO `chat`(`sender_id`, `message`, `is_read`,`reciver_id`) VALUES (0,?,false,?)";
        $data = $mysql->query($query,$chatmessage,$reciverid);
    
        $output = array('status' => 500, 'chatmessage'=>$chatmessage);
    }else{
        $query = "SELECT * FROM `chat` WHERE `is_read` = false AND `reciver_id` = 0";
        $data = $mysql->query($query)->fetchArray();

        if ((count($data) > 0)) {
            $chatmessage = $data['message'];
            $query = "UPDATE `chat` SET `is_read`=true WHERE id = ?";
            $db = $mysql->query($query,$data['id']);
            $output = array('status' => 600, 'chatmessage'=>$chatmessage,'sender'=>$data['sender_id']);

            
        }else {
            $output = array('status' => 550);
        }
    }
}else{
    $output = array('status' => 100, 'message'=>'لاکین نیستی آخه');
}

echo json_encode($output);