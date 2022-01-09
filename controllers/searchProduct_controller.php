<?php
require "__init__.php";
// status 1 ==> داده موجود
// status 0 ==> داده نیست
$output =   array('status'=>0);

$searchq = $_GET['q'];
if ($searchq !== "") {     
    $mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

    $query = "SELECT * FROM `product` WHERE name LIKE '%".$searchq."%';";
    $result = $mysql->query($query)->fetchArray();
    if (isset($result['id'])) {
        $link = $controllerroot."Product_controller.php?id=".$result['id'];
        $image = $assetsroot."images/products/".$result['image_src'];

        $output =   array('status'=>1,'name'=>$result['name'],'link'=> $link,'image'=>$image);
    }  
}

echo json_encode($output);