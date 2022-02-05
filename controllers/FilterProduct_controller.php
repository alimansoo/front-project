<?php
if (isset($_GET['catg'])) {
    $catg = Data::get('catg',$_GET);
}
$dbproduct = new DBProductEngin();
if (isset($catg)) {
    $allproduct = $dbproduct->GetAllFildes(['catg'=>$catg],null,null,true);
}else{
    $allproduct = $dbproduct->GetAll();
}
if (isset($_GET['pricemin']) and $_GET['pricemax']) {
    $minPrice = Data::get('pricemin',$_GET);
    $maxPrice = Data::get('pricemax',$_GET);
    if ($maxPrice !== '') {
        $allproduct = array_filter($allproduct, function($v, $k) use($maxPrice){
            return ((int)$v['price']) <= $maxPrice ;
        }, ARRAY_FILTER_USE_BOTH);
    }
    if ($minPrice !== '') {
        $allproduct = array_filter($allproduct, function($v, $k) use($minPrice){
            return ((int)$v['price']) >= $minPrice ;
        }, ARRAY_FILTER_USE_BOTH);
    }
}

// echo '<pre>';
// var_dump($allproduct);
// echo '</pre>';

View::IncludeForThis();