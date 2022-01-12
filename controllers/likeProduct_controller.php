<?php
if (isset($_SESSION['id'])) {
        
    $status = '';

    $id = $RoutingData[0];

    $mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

    $query = "SELECT * FROM `likeproduct` WHERE pid = ? AND uid = ?";
    $result = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();

    $output = array('status' => 0);


    if (isset($result['id'])) {
        $query = "DELETE FROM `likeproduct` WHERE id = ? ;";
        $result = $mysql->query($query,$result['id']);

        $output = array('status' => 200,'message' => 'محصول شما دیسلایک شد.' );
    }else {
        $query = "INSERT INTO `likeproduct`(`pid`, `uid`) VALUES (?,?)";
        $result = $mysql->query($query,$id,$_SESSION['id']);

        $output = array('status' => 200,'message' => 'محصول لایک شد.' );
    }
}
else {
    $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
}



echo json_encode($output);