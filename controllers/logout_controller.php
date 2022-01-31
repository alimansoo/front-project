<?php
if (Athuntication::isUser()) {
    Athuntication::logoutUser();
}

header("Location:{$BASE_URL}");

