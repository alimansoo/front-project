<?php 
$id = $_GET['pid'];

$product = getProductById($id);

$isContainCard = false;

if (isset($_SESSION['id'])) {
    $isContainCard = isContainCard($id);
}

$allCommentProduct = getAllCommentBy_pid($id);

includethisView();