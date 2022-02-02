<?php 
$id = Data::get('pid',$_GET);
$dbuser = new DBUserEngin();
$dbcomment = new DBCommentEngin();

$allCommentProduct = $dbcomment->getAllBy_pid($id);
$product = new Product($id);

View::IncludeForThis();