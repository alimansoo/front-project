<?php
function adminPanel(){
    return true;
}
$dbproduct = new DBProductEngin();
$productsDB = $dbproduct->GetAll();
$productsArray = array();
foreach ($productsDB as $value) {
    $productsArray[]= new Product($value);
}
View::IncludeForThis();