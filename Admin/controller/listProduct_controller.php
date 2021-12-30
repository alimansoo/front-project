<?php
require "__init__.php";
//admin validation
if (!isset($_SESSION['id']) and !$_SESSION['role']===1) {
    die('Not Access');
}

$mysql = new db('localhost','root','','frontproject');

$users;

$query = "SELECT * FROM `product`";
if ($mysql->query($query)) {
    $users = $mysql->query($query)->fetchAll();
}

include_once($viewroot.'listProduct_view.php');