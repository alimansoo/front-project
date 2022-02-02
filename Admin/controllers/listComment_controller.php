<?php
function adminPanel(){
    return true;
}
$dbuser = new DBCommentEngin();
$comments = $dbuser->GetAll();
View::IncludeForThis();
