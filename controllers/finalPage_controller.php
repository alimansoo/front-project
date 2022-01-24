<?php
$orderid = $_SESSION['orderid'];

$status = "";

if ($_SESSION['is_payed']) {
    $status = "success";
    
    $result = UserOrderPayed($orderid);

    $order_deatail = getUserOrderById($orderid);

}else{
    $status = "failed";
}

unset($_SESSION['orderid']);
unset($_SESSION['is_payed']);

includethisView();