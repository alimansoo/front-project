<?php
require "__init__.php";

$status = '';

$id = $_GET['id'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `cards` WHERE pid = ? AND uid = ?";
$result = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();

if (isset($result['id'])) {
    $query = "DELETE FROM `cards` WHERE id = ? ;";
    $result = $mysql->query($query,$result['id']);
    echo "deletecard";
}else {
    $query = "INSERT INTO `cards`(`pid`, `uid`, `qty`) VALUES (?,?,1)";
    $result = $mysql->query($query,$id,$_SESSION['id']);
    echo "addcard";  
}
if(isset($_GET['redirect'])){
    header("Location:Card_controller.php");
}
