<?php

$pages_name_url = array(
    'home' => '', 
    'login' => 'login/',
    'card' => 'card/',
    'register' => 'register/',
    'userpanel.dashboard' => 'userpanel/',
    'userpanel.myorder' => 'userpanel/myorder/',
    'userpanel.likeproduct' => 'userpanel/likeproduct/',
    'userpanel.bookmarkproduct' => 'userpanel/bookmarkproduct/'
);

function get_URL($path = null)
{
    global $pages_name_url;
    if (is_null($path)) {
        return $pages_name_url['home'];
    }
    return $pages_name_url[$path];
}
function get_Full_URL($path = null)
{
    global $pages_name_url;
    if (is_null($path)) {
        return site_url.$pages_name_url['home'];
    }
    return site_url.$pages_name_url[$path];
}