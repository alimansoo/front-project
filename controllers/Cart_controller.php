<?php
if (!isset($_SESSION['id'])) {
    Rout::redirect_to_url('login');
}
$dbc = new DBCartEngin();

$data = $dbc->getAllByUid($_SESSION['id']);

View::IncludeForThis();