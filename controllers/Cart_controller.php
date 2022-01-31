<?php
if (!isset($_SESSION['id'])) {
    redirect_to(
        get_Full_URL('login')
    );
}
$dbp = new DBProductEngin();
$dbc = new DBCartEngin();
$data = $dbc->getAllCartByUserId($_SESSION['id']);

$PriceofAll = 0;

$AllProductInCart = array();

foreach ($data as $key=>$value) {
    
    $data = $dbp->GetProductById($value['pid']);
    $data['qty'] = $value['qty'];
    $PriceofAll +=$data['price'] * $data['qty'];
    $AllProductInCart[$key] = $data;
}
includethisView();