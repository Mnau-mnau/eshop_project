<?php

class Product_Model extends model
{
    protected static $object_class= 'Product_Object';

    public static function getTopProducts()
    {
        $query = "SELECT `product`.*
        FROM `product`
        WHERE `product`.`is_top` =1";
        //database loads products and stores them in $result
        $resultset = db::query($query);
        $object = Product_Model::fetchObjects($resultset);
    }
}