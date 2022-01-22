<?php 
$orderid=$_GET['orderid'];

if (isset($_POST['submit'])) {
    $url = get_Full_URL('order.finalpage');
    header("Location:$url");
    $_SESSION['is_payed'] = true;
    $_SESSION['orderid'] = $orderid;
}else {
    $filename = explode('_',basename(__FILE__))[0];
    include viewroot.$filename.'_view.php';
}