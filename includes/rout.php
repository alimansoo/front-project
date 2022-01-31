<?php
class Rout
{
    static function redirect_to($path){
        if (is_null($path)) {
            return;
        }
        header("Location:$path");
    }
    static function redirect_to_url($path)
    {
        Rout::redirect_to(
            Rout::full_url($path)
        );
    }
    static function url($path = null)
    {
        global $pages_name_url;
        if (!isset($pages_name_url[$path])) {
            return;
        }
        if (is_null($path)) {
            return $pages_name_url['home']['url'];
        }
        return $pages_name_url[$path]['url'];
    }
    static function full_url($path = null)
    {
        global $pages_name_url;
        if (!isset($pages_name_url[$path])) {
            return;
        }
        if (is_null($path)) {
            return site_url.$pages_name_url['home']['url'];
        }
        return site_url.$pages_name_url[$path]['url'];
    }
}
