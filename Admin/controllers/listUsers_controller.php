<?php
if (!isset($_SESSION['id']) and !$_SESSION['role']===1) {
    die('Not Access');
}

$mysql = new db('localhost','root','','frontproject');

$users;

$query = "SELECT * FROM `user`";
if ($mysql->query($query)) {
    $users = $mysql->query($query)->fetchAll();
}

$filename = explode('_',basename(__FILE__))[0];
    include admin_viewroot.$filename.'_view.php';
