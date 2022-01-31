<?php
$db = new DBProductEngin();
$AllProduct = $db->GetAllProduct();
includethisView();

function isLike($mysql,$id)
{
    // $query = "SELECT * FROM `likeproduct` WHERE pid=? AND uid=?";
    // $product = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();
    // if(isset($product['id'])){
    //     return true;
    // }
    return false;
}

function isBookmark($mysql,$id)
{
    // $query = "SELECT * FROM `bookmarkproduct` WHERE pid=? AND uid=?";
    // $product = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();
    // if(isset($product['id'])){
    //     return true;
    // }
    return false;
}
// $mysql->close();
