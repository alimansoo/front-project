<?php
if (!isset($_SESSION['id'])) {
    redirect_to(
        get_Full_URL('login')
    );
}

$data = getAllCartByUserId($_SESSION['id']);

$PriceofAll = 0;

$AllProductInCart = array();

foreach ($data as $key=>$value) {
    $data = getProductById($value['pid']);
    $data['qty'] = $value['qty'];
    $PriceofAll +=$data['price'] * $data['qty'];
    $AllProductInCart[$key] = $data;
}
includethisView();