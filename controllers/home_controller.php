<?php
$db = new DBProductEngin();
$AllProduct = $db->GetAll();
// echo '<pre>';
// var_dump($AllProduct);
// echo '</pre>';
View::IncludeForThis();