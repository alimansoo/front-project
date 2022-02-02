<?php
session_start();

if (!isset($_SESSION['id']) or $_SESSION['role']!=="admin") {
    die('Not Access');
}

$baseroot = '../../';
$assetsroot = '../../assets/';
$viewroot = '../views/';
$controllerroot = '../controller/';

// error_reporting(E_ALL & ~E_NOTICE);

// class view{
//     static function includeThisView($viewroot,$filename){

//         echo $viewroot;
    
//         $filename = explode('_',basename($filename))[0];
    
//         include_once($viewroot.$filename.'_view.php');
//     }
// }



// function includeView($view) {

//     global $viewroot;

//     include $viewroot.$view.'_view.php';
// }


// $plugins = glob($baseroot.'*_plugin.php');

// foreach ($plugins as $plugin) {
//     include_once($plugin);
// }
