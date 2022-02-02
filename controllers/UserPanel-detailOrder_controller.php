<?php 
$orderId = Data::get('orderId',$_GET);
$dborder = new DBUserOrderEngin();
$dborderitem = new DBUserOrderItemEngin();
$dbproduct = new DBProductEngin();
$OrderItemArray = array();
$OrderItemProduct = array();
$orderitem = $dborder->getById($orderId);
$Order = new Order();
if ($orderitem and count($orderitem) > 0 ) {
    $Order = new Order($orderitem);
    $userorderitems = $dborderitem->getAllByOrderId($Order->id);
    foreach ($userorderitems as $key => $value) {
        $OrderItemArray[]= new OrderItem($value);
        $OrderItemProduct[] = new Product($value['pid']);
    }
}


View::IncludeForThis();