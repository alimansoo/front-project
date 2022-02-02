<?php
$db = new DBProductEngin();
$AllProduct = $db->getAllofThem();
View::IncludeForThis();