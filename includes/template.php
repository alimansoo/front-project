<?php
class Template
{
    static function Include($name){
        if (file_exists(TEMPLATE_PATH.$name)) {
            include TEMPLATE_PATH.$name;
        }
    }
    static function IncludePath($name){
        if (file_exists(TEMPLATE_PATH.$name)) {
            return TEMPLATE_PATH.$name;
        }
    }
}