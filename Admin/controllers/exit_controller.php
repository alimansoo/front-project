<?php
require "__init__.php";
if (isset($_SESSION['id'])) {
    session_unset();
    session_destroy();
    
    header("Location:{$controllerroot}home_controller.php");
}
