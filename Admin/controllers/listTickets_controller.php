<?php 
function adminPanel(){
    return true;
}
$dbuser = new DBTiketEngin();
$users = $dbuser->GetAll();
View::IncludeForThis();



