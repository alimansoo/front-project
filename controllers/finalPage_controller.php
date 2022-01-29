<?php
$orderId = $_SESSION['orderId'];

$status = "";

if ($_SESSION['is_payed']) {
    $status = "success";
    
    $data = userOrderPayed($orderId);

    $deatailOrder = getUserOrderById($orderId);

}else{
    $status = "failed";
}

unset($_SESSION['orderId']);
unset($_SESSION['is_payed']);

includethisView();