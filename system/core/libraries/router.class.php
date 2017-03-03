<?php

class router 
{

    public static function runController($controller_name)
    {
        //get the path to the proper controller file based on the controller name 
        $controller_file = static::getControllerFile($controller_name);

        //include the file
        include $controller_file;
    }
    
    //find the name of the page to display in URL and determine the right NAME of the controller to use
    public static function getControllerName()
    {
        //get the name of the page from URL 
        $page_name = request::get('page', 'home');
        //$page_uri = $_SERVER['REQUEST_URI'];//get the uri of the current page
        //$url_parts = explode('/',$page_uri);//break it into parts
        //$page_name = array_pop($url_parts);//gets the last part (contact from www.site.com/contact)
        //get the path to the proper controller file based on the page name

        //if(trim($page_name)=='') $page_name = 'home';//if none was specified, make ot home

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