<?php
session_start();

if (!isset($_SESSION['id']) and !$_SESSION['role']==="admin") {
    die('Not Access');
}

$baseroot = '../../';
$assetsroot = '../../assets/';
$viewroot = '../views/';
$controllerroot = '../controller/';

// error_reporting(E_ALL & ~E_NOTICE);


$plugins = glob($baseroot.'*_plugin.php');

foreach ($plugins as $plugin) {
    include_once($plugin);
}
