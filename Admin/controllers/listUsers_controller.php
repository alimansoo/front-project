<?php
function adminPanel(){
    return true;
}
$dbuser = new DBUserEngin();
$users = $dbuser->getAllofThem();
View::IncludeForThis();