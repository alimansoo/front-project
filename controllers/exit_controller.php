<?php
require "__init__.php";
if (Athuntication::isUser()) {
    Athuntication::logoutUser();
}

header("Location:{$controllerroot}home_controller.php");

