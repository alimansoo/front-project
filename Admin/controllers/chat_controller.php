<?php
$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT `sender_id` FROM `chat` Group BY `sender_id`;";
$result = $mysql->query($query)->fetchAll();

// $array = array_diff($result,);

// echo "<pre>";
// var_dump($result);
// echo "</pre>";

$AllofChat = array();

foreach ($result as $key1 => $value1) {
    if ($value1 === array("sender_id"=>0)) {
        continue;
    }
    $PersonChat = array();
    $PersonChat['id'] = $value1['sender_id'];
    $i=0;
    $messages = array();
    $query = "SELECT * FROM `chat` WHERE `sender_id` = ? ORDER BY 'id'";
    $anychat = $mysql->query($query,$value1['sender_id'])->fetchAll();

    

    $query = "SELECT * FROM `chat` WHERE `reciver_id` = ? ORDER BY 'id'";
    $mychat = $mysql->query($query,$value1['sender_id'])->fetchAll();

    

    foreach ($anychat as $key2 => $value2) {
        $messages[$i] = array('state'=>'any','message'=>$value2['message']);;
        $i++;
    }
    foreach ($mychat as $key3 => $value3) {
        $messages[$i] = array('state'=>'my','message'=>$value3['message']);
        $i++;
    }
    $PersonChat['chatarray'] = $messages;
    $AllofChat[$key1] = $PersonChat;
}

$filename = explode('_',basename(__FILE__))[0];
include admin_viewroot.$filename.'_view.php';