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
    // $name_servic = $_POST['name_servic'];
    // $price_servic = $_POST['price_servic'];
    // $icon_servic = $_POST['icon_servic'];

    // Add Product
    $cdb = new db($dbhost,$dbusername,$dbpassword,$dbname);
    $query = "INSERT INTO 
    product(name,catg,price_component,price,image_src)
    VALUES('{$_POST['product_name']}','{$_POST['product_catg']}','{$_POST['price_component']}',{$_POST['product_price']},'{$_FILES["product_image"]["name"]}')";
    $result = $cdb -> query($query);

    echo '<div class="success-alert">موفقیت امیز</div>';
    $cdb -> close();

    
    $target_dir = "../../assets/images/products/";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["product_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["product_image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    } else {
    if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["product_image"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }


    // get Product Id
    // $cdb = new db('localhost','root','','frontproject');
    // $query = "SELECT id FROM product WHERE name = ?";
    // $result = $cdb -> query($query,$_POST['product_name'])->fetchArray();
    // $productId = $result['id'];
    // print_r($result);

    //Add Services
    // for ($i=0; $i < count($name_servic); $i++) { 
    //     if (!$name_servic[$i]) {
    //         break;
    //     }
    //     $service_query = "INSERT INTO 
    //     services(name,price,product_id,image_src)
    //     VALUES('{$name_servic[$i]}',{$price_servic[$i]},{$productId},'{$icon_servic[$i]}')";
    //     $result = $cdb -> query($service_query);
    // }
    // if ($cdb -> error) {
    //     echo $cdb -> error;
    // } else {
    //     echo '<div class="success-alert">موفقیت امیز</div>';
    // }
    // $cdb -> close();
}
