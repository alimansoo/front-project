<?php
require 'routerConfig.php';
$request = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$request = str_replace(site_url,'',$request);
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
$adminurl = get_URL('adminpanel.dashboard');
if (
    substr($request,0,strlen($adminurl)) === $adminurl 
    && isset($controller) 
    && !is_null($controller)
    ) {
    include 'admin/'.controllerroot.$controller;
}elseif (isset($controller) && $controller != '') {
    include controllerroot.$controller;
}
else{
    include '404.php';
}