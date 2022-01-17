<?php
define('base_url', '/front-project/');
define('site_url', 'http://localhost:8012/front-project/');
define('APP_NAME', 'ماهرنگ');
$base_url = base_url;

require 'config.php';
require 'functions.php';
require 'urlManager.php';
require 'obManager.php';

$request = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$request = str_replace(site_url,'',$request);
// Changing Url
$RoutingData;
$url1 = 'card/changeqty/';
if (
    substr($request,0,
        strlen($url1)
    ) === $url1
) 
{
    $RoutingData = explode('/',substr(
        $request,strlen($url1)
        )) ;
    $request = $url1;
}

$url2 = 'card/delete/';
if (
    substr($request,0,
        strlen($url2)
    ) === $url2
) 
{
    $RoutingData = explode('/',substr(
        $request,strlen($url2)
        )) ;
    $request = $url2;
}

$url3 = 'card/add/';
if (
    substr($request,0,
        strlen($url3)
    ) === $url3
)
{
    $RoutingData = explode('/',substr(
        $request,strlen($url3)
        )) ;
    $request = $url3;
}

$url4 = 'productlike/';
if (
    substr($request,0,
        strlen($url4)
    ) === $url4
)
{
    $RoutingData = explode('/',substr(
        $request,strlen($url4)
        )) ;
    $request = $url4;
}

$url5 = 'productbookmark/';
if (
    substr($request,0,
        strlen($url5)
    ) === $url5
)
{
    $RoutingData = explode('/',substr(
        $request,strlen($url5)
        )) ;
    $request = $url5;
}

$url6 = 'product/';
if (
    substr($request,0,
        strlen($url6)
    ) === $url6
)
{
    $RoutingData = explode('/',substr(
        $request,strlen($url6)
        )) ;
    $request = $url6;
}

$url7 = 'search/';
if (
    substr($request,0,
        strlen($url7)
    ) === $url7
)
{
    $RoutingData = explode('/',substr(
        $request,strlen($url7)
        )) ;
    $request = $url7;
}

$url8 = 'order/';
if (
    substr($request,0,
        strlen($url8)
    ) === $url8
)
{
    $RoutingData = explode('/',substr(
        $request,strlen($url8)
        )) ;
    $request = $url8;
}
$url9 = 'productcomment/';
if (
    substr($request,0,
        strlen($url9)
    ) === $url9
)
{
    $RoutingData = explode('/',substr(
        $request,strlen($url9)
        )) ;
    $request = $url9;
}
switch ($request) {
    case get_URL() :
        require './controllers/home_controller.php';
        break;
    case get_URL('login') :
        require './controllers/login_controller.php';
        break;
    //card
    case get_URL('card') :
        require "./controllers/Card_controller.php";
        break;
    case $url1 :
        require "./controllers/changeProductQty_controller.php";
        break;
    case $url2 :
        require "./controllers/addCard_controller.php";
        break;
    case $url3 :
        require "./controllers/addCard_controller.php";
        break;
    //product
    case $url4 :
        require './controllers/likeProduct_controller.php';
        break;
    case $url5 :
        require './controllers/bookmarkProduct_controller.php';
        break;
    case $url6 :
        require './controllers/Product_controller.php';
        break;
    //comment
    case $url9 :
        require './controllers/addComment_controller.php';
        break;
    //search
    case $url7 :
        require './controllers/searchProduct_controller.php';
        break;
    //userpanel
    case 'exit/' :
        require './controllers/exit_controller.php';
        break;
    case 'userpanel/' :
        require './controllers/UserPanel_controller.php';
        break;
    case 'userpanel/like/' :
        require './controllers/UserPanel-FavoritProduct_controller.php';
        break;
    case 'userpanel/bookmark/' :
        require './controllers/UserPanel-SavedProduct_controller.php';
        break;
    case 'userpanel/myorder/' :
        require './controllers/UserPanel-myOrder_controller.php';
        break;
    case $url8 :
        require './controllers/UserPanel-detailOrder_controller.php';
        break;
    //adminpanel
    case 'adminpanel/' :
        require './admin/controller/Dashboard_controller.php';
        break;
    case 'adminpanel/listproduct/' :
        require './admin/controller/listProduct_controller.php';
        break;
    case 'adminpanel/listproduct/addproduct/' :
        require './admin/controller/addProduct_controller.php';
        break;
    case 'adminpanel/listuser/' :
        require './admin/controller/listUsers_controller.php';
        break;
    case 'adminpanel/listtickets/' :
        require './admin/controller/listTickets_controller.php';
        break;
    case 'adminpanel/listcomment/' :
        require './admin/controller/listComment_controller.php';
        break;
    case 'adminpanel/chatpanel/' :
        require './admin/controller/chat_controller.php';
        break;
    //404 Erorre
    default:
        http_response_code(404);
        require '404.php';
        break;
}
