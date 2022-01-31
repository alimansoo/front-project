<?php 
$status="";
$dbuserorder = new DBUserOrderEngin();
$dbuserorderitem = new DBUserOrderItemEngin();
$dbcart = new DBCartEngin();

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
    $orderId = $dbuserorder->add(
        $userid,
        $orderReciveDate,
        $orderAddres,
        $price,
        $transport_price,
        $orderReciver
    );

    $data = $dbcart->getAllByUid($userid);
    foreach ($data as $array) {
        $data = $dbuserorderitem->add($orderId,$array['pid'],$array['qty']);
        $dbcart->deleteByid($array['id']);
    }
    $status="success";
    
    View::IncludeForThis();
}
