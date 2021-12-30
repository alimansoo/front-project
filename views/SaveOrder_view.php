<?php 
require '__init__.php';

if($status === "success"){
    echo "سفارش شما ثبت شد و منتظر پرداخت است."."<br>";
    echo "<a href='{$controllerroot}digitalPay_controller.php?orderid={$orderid}'>پرداخت</a>";
}
