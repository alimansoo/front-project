<?php

session_start();

define('baseroot', '');
define('assetsroot', 'assets/');
define('viewroot', 'public/views/');
define('controllerroot', 'controllers/');

define('admin_baseroot', 'admin/');
define('admin_assetsroot', 'admin/assets/');
define('admin_viewroot', 'public/admin/views/');
define('admin_controllerroot', 'admin/controllers/');

// error_reporting(E_ALL & ~E_NOTICE);

$plugins = glob(baseroot.'*_plugin.php');

foreach ($plugins as $plugin) {
    include_once($plugin);
}
