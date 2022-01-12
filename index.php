<?php
define('base_url', '/front-project/');
define('full_url', 'http://localhost:8012/front-project/');
$base_url = base_url;

require 'config.php';

$request = $_SERVER['REQUEST_URI'];

//Changing Url
$RoutingData;
$url1 = base_url.'card/changeqty/';
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

$url2 = base_url.'card/delete/';
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

$url3 = base_url.'card/add/';
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

$url4 = base_url.'product/like/';
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

switch ($request) {
    case base_url :
        require './controllers/home_controller.php';
        break;
    case base_url.'login/' :
        require './controllers/login_controller.php';
        break;
    //card
    case base_url.'card/' :
        require "./controllers/Card_controller.php";
        break;
    case base_url.'card/changeqty/' :
        require "./controllers/changeProductQty_controller.php";
        break;
    case base_url.'card/delete/' :
        require "./controllers/addCard_controller.php";
        break;
    case base_url.'card/add/' :
        require "./controllers/addCard_controller.php";
        break;
    //product
    case base_url.'product/like/' :
        require './controllers/likeProduct_controller.php';
        break;
    case base_url.'exit/' :
        require './controllers/exit_controller.php';
        break;
    case base_url.'userpanel/' :
        require './controllers/UserPanel_controller.php';
        break;
    case base_url.'admin/' :
        require './controllers/exit_controller.php';
        break;
    default:
        http_response_code(404);
        echo "پیدا نشد!!";
        break;
}