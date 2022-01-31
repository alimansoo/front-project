<?php 
$id = $_GET['pid'];
$dbp = new DBProductEngin();
$dbuser = new DBUserEngin();
$dbcomment = new DBCommentEngin();
$product = $dbp->getById($id);

$isContainCard = false;

if (isset($_SESSION['id'])) {
    // $isContainCard = isContainCard($id);
}

$allCommentProduct = $dbcomment->getAllBy_pid($id);

includethisView();