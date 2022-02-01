<?php 
function adminPanel(){
    return true;
}
$dbuser = new DBTiketEngin();
$users = $dbuser->getAllofThem();
View::IncludeForThis();



