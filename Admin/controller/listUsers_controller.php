<?php
require "__init__.php";
if (!isset($_SESSION['id']) and !$_SESSION['role']===1) {
    die('Not Access');
}

$mysql = new db('localhost','root','','frontproject');

$users;

$query = "SELECT * FROM `user`";
if ($mysql->query($query)) {
    $users = $mysql->query($query)->fetchAll();
}

include_once($viewroot.'listUsers_view.php');
