<?php
$users = getAllUser();
$filename = explode('_',basename(__FILE__))[0];
include admin_viewroot.$filename.'_view.php';