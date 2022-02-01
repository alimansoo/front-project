<?php
function adminPanel(){
    return true;
}
$dbproduct = new DBProductEngin();
$users = $dbproduct->getAllofThem();
View::IncludeForThis();