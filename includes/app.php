<?php 
class App
{
    static public function render()
    { 
        if (function_exists('user_panel') and user_panel()) {
            Template::IncludePage("UserPanel");
        }else{
            Template::IncludePage("MainPage");
            echo "residmain";
        }
    }
}
