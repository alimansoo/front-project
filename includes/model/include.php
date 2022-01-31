<?php

$files = glob('includes/model/*.php');
$files = array_diff($files,array('includes/model/include.php'));
foreach ($files as $file) {
    include $file;
}