<?php
session_start();

define('baseroot', '../');
define('assetsroot', '../assets/');
define('viewroot', '../views/');
define('controllerroot', '../controllers/');


$baseroot = baseroot;
$assetsroot = assetsroot;
$viewroot = viewroot;
$controllerroot = controllerroot;

// error_reporting(E_ALL & ~E_NOTICE);

$plugins = glob(baseroot.'*_plugin.php');

foreach ($plugins as $plugin) {
    include_once($plugin);
}
