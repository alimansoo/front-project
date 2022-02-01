<?php
function adminPanel(){
    return true;
}
$dbproduct = new DBProductEngin();
$productsDB = $dbproduct->getAllofThem();
$productsArray = array();
foreach ($productsDB as $value) {
    $productsArray[]= new Product($value);
}
View::IncludeForThis();