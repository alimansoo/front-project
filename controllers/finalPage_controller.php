<?php
$dbuserordere = new DBUserOrderEngin();
$orderId = Data::get('orderId',$_SESSION);

$status = "";

if ($_SESSION['is_payed']) {
    $status = "success";
    
    $data = $dbuserordere->payed($orderId);

    $deatailOrder = $dbuserordere->getById($orderId);

}else{
    $status = "failed";
}

unset($_SESSION['orderId']);
unset($_SESSION['is_payed']);

View::IncludeForThis();