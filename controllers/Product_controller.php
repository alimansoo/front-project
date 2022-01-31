<?php 
$id = $_GET['pid'];
$dbp = new DBProductEngin();
$product = $dbp->GetProductById($id);

$isContainCard = false;

if (isset($_SESSION['id'])) {
    // $isContainCard = isContainCard($id);
}

// $allCommentProduct = getAllCommentBy_pid($id);

includethisView();