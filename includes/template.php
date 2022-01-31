<?php
class Template
{
    static function Include($name,$data=null){
        $filename = TEMPLATE_PATH.$name.'.php';
        if (file_exists($filename)) {
            include $filename;
        }
        // echo $name." => ";
        // var_dump($data);
        // echo "<br>";
    }
    static function IncludePath($name){
        $filename = TEMPLATE_PATH.$name.'.php';
        if (file_exists($filename)) {
            return $filename;
        }
    }
}