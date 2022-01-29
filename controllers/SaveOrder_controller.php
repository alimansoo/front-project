<?php 
$status="";

$userid = $_SESSION['id'];

$datetime = new DateTime();
$today = $datetime->format('Y-m-d H:i:s');
foreach ($_POST as $key => $value) {
    $$key = $value;
}

if(isset($orderReciverisme)){
    $orderReciver = $_SESSION['firstname']." ".$_SESSION['lastname'];
}

if(isset($_POST['submit'])){
    $orderId = insertUserOrder(
        $userid,
        $orderReciveDate,
        $orderAddres,
        $price,
        $transport_price,
        $orderReciver
    );

    $data = getAllCartByUserId($userid);
    foreach ($data as $array) {
        $data = insertUserOrderItem($orderId,$array['pid'],$array['qty']);
        deleteCartByid($array['id']);
    }
    $status="success";
    
    includethisView();
}
