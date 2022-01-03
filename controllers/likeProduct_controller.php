<?php
require "__init__.php";

$status = '';

$id = $_GET['id'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

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

echo json_encode($output);