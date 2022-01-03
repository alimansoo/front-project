<?php
require_once("__init__.php");

if (!isset($_POST['submit'])) 
//View
{
    include_once('../views/addProduct_view.php');
}
else 
//Controller
{
    $name_servic = $_POST['name_servic'];
    $price_servic = $_POST['price_servic'];
    $icon_servic = $_POST['icon_servic'];

    // Add Product
    $cdb = new db($dbhost,$dbusername,$dbpassword,$dbname);
    $query = "INSERT INTO 
    product(name,catg,price_component,price,image_src)
    VALUES('{$_POST['product_name']}','{$_POST['product_catg']}','{$_POST['price_component']}',{$_POST['product_price']},'{$_POST['product_image']}')";
    $result = $cdb -> query($query);
    if ($cdb -> error) {
        echo $cdb -> error;
    } else {
        echo '<div class="success-alert">موفقیت امیز</div>';
    }
    $cdb -> close();

    $uploads_dir = '/assets/images';
    // foreach ($_FILES["product_image"]["name"] as $key => $image) {

    //     $tmp_name = $_FILES["product_image"]["tmp_name"][$key];
    //     $name = basename($_FILES["product_image"]["name"][$key]);
    //     move_uploaded_file($tmp_name, "$uploads_dir/{$name}");
    // }

    // get Product Id
    $cdb = new db('localhost','root','','frontproject');
    $query = "SELECT id FROM product WHERE name = ?";
    $result = $cdb -> query($query,$_POST['product_name'])->fetchArray();
    $productId = $result['id'];
    print_r($result);

    //Add Services
    for ($i=0; $i < count($name_servic); $i++) { 
        if (!$name_servic[$i]) {
            break;
        }
        $service_query = "INSERT INTO 
        services(name,price,product_id,image_src)
        VALUES('{$name_servic[$i]}',{$price_servic[$i]},{$productId},'{$icon_servic[$i]}')";
        $result = $cdb -> query($service_query);
    }
    if ($cdb -> error) {
        echo $cdb -> error;
    } else {
        echo '<div class="success-alert">موفقیت امیز</div>';
    }
    $cdb -> close();
}

