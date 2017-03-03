<?php

class AddProduct_Model extends model
{
    protected static $object_class= 'AddProduct_Object';

    public static function addProduct($subs)
    {
        $query = "
        INSERT INTO `products` (name, description, price, size, weight, color, image_name, product_image)
        VALUES (?,?,?,?,?,?,?,?)
        ";

        //database loads products and stores them in $result
        $resultset = db::query($query, $subs);

        return $resultset;//how do I get last insert id from this?
    }
}