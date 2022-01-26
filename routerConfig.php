<?php

$pages_name_url = array(
    'home' => ['url'=>'','controller'=>'home_controller.php'], 
    'login' => ['url'=>'login','controller'=>'login_controller.php'],
    'cart' => ['url'=>'cart','controller'=>'Cart_controller.php'],
    'register' => ['url'=>'register','controller'=>'register_controller.php'],
    'logout' => ['url'=>'logout','controller'=>'logout_controller.php'],
    //Order
    'order.sailsinvoice' => ['url'=>'salesinvoice','controller'=>'SalesInvoice_controller.php'],
    'order.deatailorder' => ['url'=>'deatailorder','controller'=>'deatailOrder_controller.php'],
    'order.saveorder' => ['url'=>'saveorder','controller'=>'SaveOrder_controller.php'],
    'order.digitalpay' => ['url'=>'digitalpay','controller'=>'digitalPay_controller.php'],
    'order.finalpage' => ['url'=>'finalpage','controller'=>'finalPage_controller.php'],
    //User Panel
    'userpanel.dashboard' => ['url'=>'userpanel','controller'=>'UserPanel_controller.php'],
    'userpanel.myorder' => ['url'=>'userpanel/myorder','controller'=>'UserPanel-myOrder_controller.php'],
    'userpanel.deatailorder' => ['url'=>'userpanel/deatailorder','controller'=>'UserPanel-detailOrder_controller.php'],
    'userpanel.likeproduct' => ['url'=>'userpanel/likeproduct','controller'=>'UserPanel-FavoritProduct_controller.php'],
    'userpanel.bookmarkproduct' => ['url'=>'userpanel/bookmarkproduct','controller'=>'UserPanel-SavedProduct_controller.php'],
    //Product
    'product' => ['url'=>'product','controller'=>'Product_controller.php'],
    'product.addcart' => ['url'=>'product/addcart','controller'=>'Product_functions_controller.php'],
    'product.changeqty' => ['url'=>'product/changeqty','controller'=>'Product_functions_controller.php'],
    'product.like' => ['url'=>'product/like','controller'=>'Product_functions_controller.php'],
    'product.bookmark' => ['url'=>'product/bookmark','controller'=>'Product_functions_controller.php'],
    //Search
    'search.product' => ['url'=>'search','controller'=>'searchProduct_controller.php'],
    //Admin Panel
    'adminpanel.dashboard' => ['url'=>'adminpanel','controller'=>'Dashboard_controller.php'],
    'adminpanel.listproduct' => ['url'=>'adminpanel/listproduct','controller'=>'listProduct_controller.php'],
    'adminpanel.listuser' => ['url'=>'adminpanel/listuser','controller'=>'listUsers_controller.php'],
    'adminpanel.listcomment' => ['url'=>'adminpanel/listcomment','controller'=>'listComment_controller.php'],
    'adminpanel.listticket' => ['url'=>'adminpanel/listticket','controller'=>'listTickets_controller.php'],
    'adminpanel.chat' => ['url'=>'adminpanel/chat','controller'=>'chat_controller.php'],
    //Chat
    'adminpanel.chatmanage' => ['url'=>'adminpanel/chatmanage','controller'=>'adminChatController_controller.php'],
    'userpanel.chatmanage' => ['url'=>'userpanel/chatmanage','controller'=>'chatController_controller.php'],
);

function get_URL($path = null)
{
    global $pages_name_url;
    if (!isset($pages_name_url[$path])) {
        return;
    }
    if (is_null($path)) {
        return $pages_name_url['home']['url'];
    }
    return $pages_name_url[$path]['url'];
}
function get_Full_URL($path = null)
{
    global $pages_name_url;
    if (!isset($pages_name_url[$path])) {
        return;
    }
    if (is_null($path)) {
        return site_url.$pages_name_url['home']['url'];
    }
    return site_url.$pages_name_url[$path]['url'];
}
function getProductUrl($pid) {
    return get_Full_URL('product').'?pid='.$pid;
}
function getProduc_AddCart_tUrl($pid,$redirect = false) {
    if ($redirect) {
        return get_Full_URL('product.addcart').'?pid='.$pid.'&redirect';
    } else {
        return get_Full_URL('product.addcart').'?pid='.$pid;
    }
}
function getProduc_ChangeQty_Url($pid,$action) {
    return get_Full_URL('product.changeqty').'?pid='.$pid.'&action='.$action;
}
function getProduc_like_Url($pid) {
    return get_Full_URL('product.like').'?pid='.$pid;
}
function getProduc_bookmark_Url($pid) {
    return get_Full_URL('product.bookmark').'?pid='.$pid;
}
function searchProduct($q='') {
    return get_Full_URL('search.product').'?q='.$q;
}
function getOrderDeatailUrl($oid) {
    return get_Full_URL('userpanel.deatailorder').'?orderid='.$oid;
}