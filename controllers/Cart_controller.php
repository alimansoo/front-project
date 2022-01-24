<?php
if (!isset($_SESSION['id'])) {
    redirect_to(
        get_Full_URL('login')
    );
}

$result = getAllCartByUserId($_SESSION['id']);

$allofPrice = 0;

$productsArray = array();

foreach ($result as $key=>$value) {
    $result = getProductById($value['pid']);
    $result['qty'] = $value['qty'];
    $allofPrice +=$result['price'] * $result['qty'];
    $productsArray[$key] = $result;
}
includethisView();