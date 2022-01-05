<?php
require "__init__.php";

$mysql = new db('localhost','root','','frontproject');

$query = "SELECT * FROM `comment`";
$comments = $mysql->query($query)->fetchAll();

$filename = explode('_',basename(__FILE__))[0];
    include $viewroot.$filename.'_view.php';