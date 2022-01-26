<?php

function getAllCommentBy_pid($productId) {
    $result = getAllDataTable(
        'comment',
        '*',
        array(
            'pid'=>$productId
        )
    );
    if(count($result) < 0 ){
        return false;
    }
    return $result;
}