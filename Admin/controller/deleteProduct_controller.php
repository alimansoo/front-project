<?php
require "__init__.php";

$status = '';

$id = $_GET['id'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `product` WHERE id = ?";
$result = $mysql->query($query,$id)->fetchArray();
if (isset($result['id'])) {
    $query = "DELETE FROM `product` WHERE id = ?";
    $result = $mysql->query($query,$id);
}else {
    $status = "product not found";
}

include_once($viewroot."deleteProduct_view.php");