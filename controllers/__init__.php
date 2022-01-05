<?php
session_start();

$baseroot = '../';
$assetsroot = '../assets/';
$viewroot = '../views/';
$controllerroot = '../controllers/';

// error_reporting(E_ALL & ~E_NOTICE);

$plugins = glob($baseroot.'*_plugin.php');

foreach ($plugins as $plugin) {
    include_once($plugin);
}
