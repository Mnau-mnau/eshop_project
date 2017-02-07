<?php

class router 
{
    //find the name of the page to display in URL and determine the right NAME of the controller to use
    public static function getControllerName()
    {
        //get the name of the page from URL 
        $page_name = request::get('page', 'home');
        //get the path to the proper controller file based on the page name
        $controller_file = static::getControllerFile($page_name);
        //if such  a controller exists
        if(file_exists($controller_file))
        {
            //return the name of the page 
            return $page_name;
        }
        else
        {
            //otherwise throw a nice error!
            return 'error404';
        }
    }

    //determine what php file should be used to prepare a page based on 
    //the page's name ('home', 'contact', 'detail', etc.) 
    public static function getControllerFile($page_name)
    {
        $file_name = $page_name . '.controller.php';//home.controller.php
        $file_path = CONTROLLERS_DIR . '/'. $file_name; // ~/www/eshop-project/system/project/controllers
        return $file_path;
    }
}