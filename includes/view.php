<?php
class View
{
    static function IncludeForThis()
    {
        $filename = getFilename(
            basename(
                debug_backtrace()[0]['file']
            )
        );
        include VIEW_PATH.$filename.'_view.php';
    }
    static function Include($filename)
    {
        include VIEW_PATH.$filename.'_view.php';
    }
}