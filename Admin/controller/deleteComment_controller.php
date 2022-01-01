<?php
require "__init__.php";

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "DELETE FROM `comment` WHERE id =?";
$mysql->query($query,$_GET['id']);

header("Location:listComment_controller.php");

