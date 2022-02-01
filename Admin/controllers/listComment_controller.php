<?php
function adminPanel(){
    return true;
}
$dbuser = new DBCommentEngin();
$comments = $dbuser->getAllofThem();
View::IncludeForThis();
