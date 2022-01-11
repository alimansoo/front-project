<?php
require "__init__.php";
// status 1 ==> داده موجود
// status 0 ==> داده نیست
$output =   array('status'=>0);

$searchq = $_GET['q'];
if ($searchq !== "") {     
    $mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

    $query = "SELECT * FROM `product` WHERE name LIKE '%".$searchq."%';";
    $result = $mysql->query($query)->fetchAll();
    $array = array();
    foreach ($result as $key => $value) {
        if (isset($value['id'])) {
            $link = $controllerroot."Product_controller.php?id=".$value['id'];
            $image = $assetsroot."images/products/".$value['image_src'];
    
            $array[$key] =   array('status'=>1,'name'=>$value['name'],'link'=> $link,'image'=>$image);
        } 
    }
    if ($array) {
        $output =   array('status'=>1,'data'=>$array);
    }
}

echo json_encode($output);