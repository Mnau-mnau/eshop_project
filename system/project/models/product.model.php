<?php

class Product_Model extends model
{
    protected static $object_class= 'Product_Object';

    public static function getNewProducts()
    {
        $query = "
        SELECT `products`.*
        FROM `products`
        ORDER BY `id` DESC
        
        LIMIT 3";

        //database loads products and stores them in $result
        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }
    public static function getProducts()
    {
        $query = "
        SELECT `products`.*
        FROM `products`
        ";

        //database loads products and stores them in $result
        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }
    public static function getDetail($id)
    {
        $query = "
        SELECT `products`.*
        FROM `products`
        
        WHERE `id` = ?";
        $resultset = db::query($query, $id);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }
}