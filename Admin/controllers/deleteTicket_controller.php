<?php
require "__init__.php";

$status = '';

$id = $_GET['id'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `ticket` WHERE `ID`= ? ;";
$data = $mysql->query($query,$id)->fetchArray();
if (isset($data['ID'])) {
    $query = "DELETE FROM `ticket` WHERE ID = ?";
    $data = $mysql->query($query,$id);
}else {
    $status = "ticket not found";
}

$filename = explode('_',basename(__FILE__))[0];
    include $viewroot.$filename.'_view.php';