<?php
if (Athuntication::isUser()) {
    Athuntication::logoutUser();
}

header("Location:{$base_url}");

