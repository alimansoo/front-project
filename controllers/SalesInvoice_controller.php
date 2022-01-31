<?php
$dbcart = new DBCartEngin();
$PriceofAll = 0;
$transportPrice = 250000;

$data = $dbcart->getAllByUid($_SESSION['id']);

View::IncludeForThis();