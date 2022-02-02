<?php
function adminPanel(){
    return true;
}
$dbuser = new DBUserEngin();
$users = $dbuser->GetAll();
View::IncludeForThis();