<?php
require "__init__.php";

$mysql = new db('localhost','root','','frontproject');

$query = "SELECT * FROM `comment`";
$comments = $mysql->query($query)->fetchAll();

include_once($viewroot.'listComment_view.php');