<?php 
require '__init__.php';

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
    $mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);
    $query = "INSERT INTO `order_user`
    (`uid`, `recive_date`, `saved_date`, `addres`, `priceAll`,`transport_price`, `reciver_name`, `is_pay`)
     VALUES (?,?,?,?,?,?,?,false)";
    $result = $mysql->query($query,$userid,$orderReciveDate,$today,$orderAddres,$price,$transport_price,$orderReciver);

    $query = "SELECT `id` FROM `order_user` WHERE uid =? AND saved_date=?";
    $result = $mysql->query($query,$userid,$today)->fetchArray();

    $orderid = $result['id'];

    $query = "SELECT * FROM `cards` WHERE uid=?";
    $result = $mysql->query($query,$userid)->fetchAll();
    foreach ($result as $array) {
        
        $query = "INSERT INTO `order_user_item`( `oid`, `pid`, `qty`)
         VALUES (?,?,?)";
        $result = $mysql->query($query,$orderid,$array['pid'],$array['qty']);

        $query = "DELETE FROM `cards` WHERE id =?";
        $result = $mysql->query($query,$array['id']);
    }
    $status="success";
    include $viewroot."SaveOrder_view.php";
}
