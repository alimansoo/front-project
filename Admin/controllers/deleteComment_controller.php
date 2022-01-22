<?php
require "__init__.php";

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "DELETE FROM `comment` WHERE id =?";
$mysql->query($query,$_GET['id']);

$output = array('status' => 200,'message' => 'کامنت حذف شد.' );

echo json_encode($output);