<?php
require "__init__.php";

$status = '';

$id = $_GET['id'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `ticket` WHERE `ID`= ? ;";
$result = $mysql->query($query,$id)->fetchArray();
if (isset($result['ID'])) {
    $query = "DELETE FROM `ticket` WHERE ID = ?";
    $result = $mysql->query($query,$id);
}else {
    $status = "ticket not found";
}

include_once($viewroot."deleteTicket_view.php");