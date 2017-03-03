<?php

class Login extends Model 
{
    protected static $object_class= 'Login_Object';

    public static function getAdminByEmail($email){
        
        $query = "SELECT `email`, `id`, `is_admin`, `passwod` 
                FROM `users` 
                WHERE `email` = ?";
        
        $resultset = db::query($query, $email);
        $object = static::fetchObject($resultset);

        return $objects;
    }
}