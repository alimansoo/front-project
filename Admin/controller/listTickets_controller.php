<?php
require "__init__.php";

if (!isset($_SESSION['id']) and !$_SESSION['role']===1) {
    die('Not Access');
}
    
$mysql = new db('localhost','root','','frontproject');

$users;

$query = "SELECT * FROM `ticket`";
if ($mysql->query($query)) {
    $users = $mysql->query($query)->fetchAll();
}

include($viewroot.'listTickets_view.php');



