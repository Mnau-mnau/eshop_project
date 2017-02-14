<?php

//
class model
{
    protected static $object_class = 'stdClass';
    //this function takes objects loaded from database and sets them into an array
    public static function fetchObjects($statement)
    {
        $statement->setFetchMode(PDO::FETCH_CLASS, static::$object_class);
        return $statement->fetchAll();
    }
}