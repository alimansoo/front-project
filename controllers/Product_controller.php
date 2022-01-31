<?php 
$id = $_GET['pid'];
$dbuser = new DBUserEngin();
$dbcomment = new DBCommentEngin();

$isContainCard = false;

if (isset($_SESSION['id'])) {
    // $isContainCard = isContainCard($id);
}

$allCommentProduct = $dbcomment->getAllBy_pid($id);

$product = new Product($id);

View::IncludeForThis();