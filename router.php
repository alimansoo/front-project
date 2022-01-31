<?php
require 'routerConfig.php';
$request = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$request = str_replace(SITE_URL,'',$request);
$datapos = strpos($request,'?');
if ($datapos) {
    $router = substr($request,0,$datapos);
} else {
    $router = substr($request,0);
}
foreach ($pages_name_url as $key => $value) {
    if ($value['url'] === $router) {
        $controller = $value['controller'];
    }
}
$adminurl = Rout::url('adminpanel.dashboard');
if (
    substr($request,0,strlen($adminurl)) === $adminurl 
    && isset($controller) 
    && !is_null($controller)
    ) {
    include 'admin/'.CONTROLLER_PATH.$controller;
}elseif (isset($controller) && $controller != '') {
    include CONTROLLER_PATH.$controller;
}
else{
    include '404.php';
}