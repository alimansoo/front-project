<?php
if (Athuntication::isUser()) {
    Athuntication::logoutUser();
}
$BASE_URL = BASE_URL;
header("Location:{$BASE_URL}");

