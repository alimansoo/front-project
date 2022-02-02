<?php
// status 1 ==> داده موجود
// status 0 ==> داده نیست
$dbprdouct = new DBProductEngin();
$output =   array('status'=>0);

$searchq = urldecode($_GET['q']);
if ($searchq !== '') {
    $data = $dbprdouct->GetAllLikeBy($searchq);
    $array = array();
    foreach ($data as $key => $value) {
        if (isset($value['id'])) {
            $link = getProductUrl($value['id']);
            $image = BASE_URL."assets/images/products/".$value['image_src'];

            $array[$key] =   array('status'=>1,'name'=>$value['name'],'link'=> $link,'image'=>$image);
        } 
    }
    if ($array) {
        $output =   array('status'=>1,'data'=>$array);
    }
}

echo json_encode($output);