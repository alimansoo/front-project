<?php
require_once("__init__.php");

$id = $_GET["id"];
$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);
if (!isset($_POST['submit'])) 
//View
{
	$query = "SELECT * FROM `product` WHERE id = {$id}";
	$result = $mysql->query($query)->fetchArray();

	$mysql = new db('localhost','root','','frontproject');
	$query = "SELECT * FROM `services` WHERE product_id = {$id}";
	$services = $mysql->query($query)->fetchAll();

	include_once($viewroot.'editProduct_view.php');
}
else 
//Controller
{
	$query = "UPDATE `product` SET `name`='{$_POST['product_name']}',
	`catg`='{$_POST['product_catg']}',`price_component`='{$_POST['price_component']}',
	`price`={$_POST['product_price']}";
	
	if(isset($_POST['product_image']))
	{
		$query.=",`image_src`='{$_POST['product_image']}'";
		$filename = $_FILES["product_image"]["name"];
		$tempname = $_FILES["product_image"]["tmp_name"];	
			$folder = "assets/images/".$filename;
			
			
			if (move_uploaded_file($tempname, $folder)) {
				$msg = "Image uploaded successfully";
			}else{
				$msg = "Failed to upload image";
		}
	}

	$query.=" WHERE `id`= {$id}";
	if ($mysql->query($query)) {
		echo "<br>";
		echo "Success";
	}
}

