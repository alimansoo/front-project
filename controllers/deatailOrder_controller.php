<?php 
require '__init__.php';

$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$query = "SELECT * FROM `cards` WHERE uid = ?";
$result = $mysql->query($query,$_SESSION['id'])->fetchAll();

$allofPrice = $_POST['priceAll'];
$transportPrice = $_POST['transport_price'];

$filename = explode('_',basename(__FILE__))[0];
include $viewroot.$filename.'_view.php';
