<?php

class config {
    protected static $data = array();
    /*
        'base_url' => 'http://eshop.local',
        'db_host' => 'localhost',
        'db_name' => 'classproject',
        'db_user' => 'root',
        'db_pass' => '',
        'administrator' => null,
        'site_title' => 'My amazing eshop',
    */

    public static function get($key, $default = null){
        if(array_key_exists($key, static::$data)) 
        // using array_key_exists is better - it returns the value of the array key no matter what it is 
        //isset returns default if the key has value of null as if the key doesn't exist at all
        //so it is better to use first version rather than the version bellow
        // not good enough version - if(isset(static::$data[$key])) 
        {

            return static::$data[$key];
        }
        else
        {
            return $default;
        }
    }
    //load all the configuration settings 
    //form the config.php and put it inside static::$data
    public static function load()
    {
        //here we have the access to the config array
        include(CONFIG_DIR.'/config.php');

        //assign $config as the value of static::$data 
        static::$data = $config; 
    }
}

// serves for calling data sources like this: 
$host = config::get('db_host'); //localhost
