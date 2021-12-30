<?php
require "__init__.php";
if (!isset($_SESSION['id']) and !$_SESSION['role']===1) {
    die('Not Access');
}
include_once($viewroot.'Dashboard_view.php');