<?php

class Category_Model extends model
{
    protected static $object_class = 'Category_Object';

    public static function getCategory()
    {
        // write query
        $query = "
            SELECT `category`.*
            FROM `category`
            WHERE `category`.`parent_id` IS NULL 
        ";

        // IS NULL and IS NOT NULL have to be written this way, = NULL doesn't work!

        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);
        

        return $objects;
    } 

    public static function getSubCategory($parent_category_id)
    {
        // write query
        $query = "
            SELECT `category`.*
            FROM `category`
            WHERE `category`.`parent_id` = ?  
        ";

        // run query and get result set
        $resultset = db::query($query, array($parent_category_id));
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);
        

        return $objects;
    }  
    //this gets an id of category - retrieves one object of the class Category_Object based on its id
    public static function retrieveById($id)
    {
        $query = "
        SELECT `category`.*
        FROM `category`
        WHERE `category`.`id` = ?
        ";
        $resultset = db::query($query, array($id));
        //$id selects first object of the array - will replace the 1st ?

        $object = static::fetchObject($resultset);

        return $object;

    
    }
}