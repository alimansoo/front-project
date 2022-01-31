<?php
function include_controller($name) {
    include "./controllers/{$name}_controller.php";
}


function getFilename($filename){
    return explode('_',$filename)[0];
}
function includethisView()
{
    $filename = getFilename(
        basename(
            debug_backtrace()[0]['file']
        )
    );
    include VIEW_PATH.$filename.'_view.php';
}
function includeView($filename)
{
    include VIEW_PATH.$filename.'_view.php';
}
function includethisAdminView()
{
    $filename = getFilename(
        basename(
            debug_backtrace()[0]['file']
        )
    );
    include VIEW_PATH.$filename.'_view.php';
}
function includeAdminView($filename)
{
    include VIEW_PATH.$filename.'_view.php';
}
function getImageSource($imagename){
    return base_url."assets/images/products/".$imagename;
}