<?php

if (isset($_SESSION['id'])) {
        
    
    $status = '';

    $id = $RoutingData[0];

    $mysql =  new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

    $query = "SELECT * FROM `cards` WHERE pid = ? AND uid = ?";
    $result = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();

    if (isset($result['id'])) {
        $query = "DELETE FROM `cards` WHERE id = ? ;";
        $result = $mysql->query($query,$result['id']);
        $output = array('status' => 200,'message' => 'محصول از سبد حذف شد.' );
    }else {
        $query = "INSERT INTO `cards`(`pid`, `uid`, `qty`) VALUES (?,?,1)";
        $result = $mysql->query($query,$id,$_SESSION['id']);
        $output = array('status' => 200,'message' => 'محصول به سبد اضافه شد.' ); 
    }
    if(isset($_GET['redirect'])){
        header("Location:".base_url."card/");
    }

}
else {
    $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
}

echo json_encode($output);