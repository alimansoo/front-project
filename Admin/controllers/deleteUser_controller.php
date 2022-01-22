<?php
require "__init__.php";

$status = '';

$id = $_GET['id'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `user` WHERE id = ?";
$result = $mysql->query($query,$id)->fetchArray();
if (isset($result['id'])) {
    $query = "DELETE FROM `user` WHERE id = ?";
    $result = $mysql->query($query,$id);
}else {
    $status = "user not found";
}


include_once($viewroot."deleteUser_view.php");