<?php
define('base_url', '/front-project/');
define('site_url', 'http://localhost:8012/front-project/');
define('APP_NAME', 'ماهرنگ');
$base_url = base_url;

require 'config.php';
require "plugin/includes.php";
require 'functions.php';
require 'obManager.php';
require "db/includes.php";

//router
require 'router.php';