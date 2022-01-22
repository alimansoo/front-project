<?php
require_once("__init__.php");

$filename = explode('_',basename(__FILE__))[0];

include $viewroot.$filename.'_view.php';