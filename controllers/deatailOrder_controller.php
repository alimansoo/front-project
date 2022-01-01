<?php 
require '__init__.php';

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `cards` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

$allofPrice = $_POST['priceAll'];
$transportPrice = $_POST['transport_price'];

include($viewroot."deatailOrder_view.php");
