<?php
$dbuserordere = new DBUserOrderEngin();
$orderId = $_SESSION['orderId'];

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

includethisView();