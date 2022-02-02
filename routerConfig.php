<?php
$pages_name_url = array(
    'home' => ['url'=>'','controller'=>'home_controller.php'], 
    'login' => ['url'=>'login','controller'=>'login_controller.php'],
    'cart' => ['url'=>'cart','controller'=>'Cart_controller.php'],
    'register' => ['url'=>'register','controller'=>'register_controller.php'],
    'logout' => ['url'=>'logout','controller'=>'logout_controller.php'],
    'addcomment' => ['url'=>'productcomment','controller'=>'action/Comment.php'],
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
    //Product Action
    'product' => ['url'=>'product','controller'=>'Product_controller.php'],
    'product.addcart' => ['url'=>'product/addcart','controller'=>'action/Product.php'],
    'product.changeqty' => ['url'=>'product/changeqty','controller'=>'action/Product.php'],
    'product.like' => ['url'=>'product/like','controller'=>'action/Product.php'],
    'product.bookmark' => ['url'=>'product/bookmark','controller'=>'action/Product.php'],
    //Search
    'search.product' => ['url'=>'search','controller'=>'action/SearchProduct.php'],
    //Admin Panel
    'adminpanel.dashboard' => ['url'=>'adminpanel','controller'=>'Dashboard_controller.php'],
    'adminpanel.listproduct' => ['url'=>'adminpanel/listproduct','controller'=>'listProduct_controller.php'],
    'adminpanel.listuser' => ['url'=>'adminpanel/listuser','controller'=>'listUsers_controller.php'],
    'adminpanel.listcomment' => ['url'=>'adminpanel/listcomment','controller'=>'listComment_controller.php'],
    'adminpanel.listticket' => ['url'=>'adminpanel/listticket','controller'=>'listTickets_controller.php'],
    'adminpanel.addproduct' => ['url'=>'adminpanel/addproduct','controller'=>'addProduct_controller.php'],
    'adminpanel.chat' => ['url'=>'adminpanel/chat','controller'=>'chat_controller.php'],
    //Chat
    'adminpanel.chatmanage' => ['url'=>'adminpanel/chatmanage','controller'=>'adminChatController_controller.php'],
    'userpanel.chatmanage' => ['url'=>'userpanel/chatmanage','controller'=>'chatController_controller.php'],
);


function getProductUrl($pid) {
    return Rout::full_url('product').'?pid='.$pid;
}
function getProduc_AddCart_tUrl($pid,$redirect = false) {
    if ($redirect) {
        return Rout::full_url('product.addcart').'?pid='.$pid.'&redirect';
    } else {
        return Rout::full_url('product.addcart').'?pid='.$pid;
    }
}
function getProduc_ChangeQty_Url($pid,$action) {
    return Rout::full_url('product.changeqty').'?pid='.$pid.'&action='.$action;
}
function getProduc_like_Url($pid) {
    return Rout::full_url('product.like').'?pid='.$pid;
}
function getProduc_bookmark_Url($pid) {
    return Rout::full_url('product.bookmark').'?pid='.$pid;
}
function searchProduct($q='') {
    return Rout::full_url('search.product').'?q='.$q;
}
function getOrderDeatailUrl($oid) {
    return Rout::full_url('userpanel.deatailorder').'?orderId='.$oid;
}