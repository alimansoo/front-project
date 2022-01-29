<?php
require_once("__init__.php");

$cdb = new db($dbhost,$dbusername,$dbpassword,$dbname);
$query = "DELETE FROM `product` WHERE id =?";
$data = $cdb -> query($query,$_GET['id']);

$output = array('status' => 200,'message' => 'محصول حذف شد.' );

echo json_encode($output);