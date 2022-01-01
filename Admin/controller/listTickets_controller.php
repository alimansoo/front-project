<?php
require "__init__.php";
    
$mysql = new db('localhost','root','','frontproject');

$users;

$query = "SELECT * FROM `ticket`";
if ($mysql->query($query)) {
    $users = $mysql->query($query)->fetchAll();
}

include($viewroot.'listTickets_view.php');



