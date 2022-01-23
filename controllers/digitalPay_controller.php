<?php 
$orderid=$_GET['orderid'];

if (isset($_POST['submit'])) {
    $url = get_Full_URL('order.finalpage');
    header("Location:$url");
    $_SESSION['is_payed'] = true;
    $_SESSION['orderid'] = $orderid;
}else {
    includethisView();
}