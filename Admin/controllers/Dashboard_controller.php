<?php

$mysql = new db('localhost','root','','frontproject');

$query = "SELECT * FROM `new_ticket`";
$newTicket = $mysql->query($query)->fetchAll();

foreach ($newTicket as $key => $ticket) {
    $query = "SELECT * FROM `ticket` WHERE id=?";
    $result = $mysql->query($query,$ticket['tid'])->fetchArray();
    
    $newTicket[$key]['text'] = $result['text'];
}

$query = "SELECT * FROM `new_comment`";
$newComment = $mysql->query($query)->fetchAll();

foreach ($newComment as $key => $comment) {
    $query = "SELECT * FROM `comment` WHERE id=?";
    $result = $mysql->query($query,$comment['cid'])->fetchArray();
    
    $newComment[$key]['message'] = $result['message'];
}

$filename = explode('_',basename(__FILE__))[0];
include admin_viewroot.$filename.'_view.php';