<?php
function getObFileName(){
    $pagename = getFilename(
        basename(
            debug_backtrace()[0]['file']
            )
    );
    return "catch/{$_SESSION['id']}-$pagename.html";
}
function catchFile($filename) {
    $content = ob_get_flush();
    file_put_contents($filename,$content);
}
function readcatchedFile($filename) {
    return file_get_contents($filename);
}
function getFilename($filename){
    return explode('_',$filename)[0];
}
function clearCatck($filename){
    unlink($filename);
}