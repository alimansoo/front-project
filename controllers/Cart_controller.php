<?php
if (!isset($_SESSION['id'])) {
    Rout::redirect_to_url('login');
}
$dbp = new DBProductEngin();
$dbc = new DBCartEngin();

$data = $dbc->getAllByUid($_SESSION['id']);

$PriceofAll = 0;

$AllProductInCart = array();

foreach ($data as $key=>$value) 
{
    $data = $dbp->getById($value['pid']);
    $data['qty'] = $value['qty'];
    $PriceofAll +=$data['price'] * $data['qty'];
    $AllProductInCart[$key] = $data;
}
View::IncludeForThis();