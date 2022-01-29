<?php 
$orderId=$_GET['orderId'];

if (isset($_POST['submit'])) {
    $url = get_Full_URL('order.finalpage');
    header("Location:$url");
    $_SESSION['is_payed'] = true;
    $_SESSION['orderId'] = $orderId;
}else {
    includethisView();
}