<?php

//our class for connecting to the database
//it allows simple running of SQL queries
//it will use information from our config file
class db{

    //$pdo stores the database connection information
    protected static $pdo = null;
    //
    public static function pdo()
    {
    // if static::$pdo was not yet created (ie. connected to the db)
        if(static::$pdo===null) {

      // connect to the database
      // store the connection (PDO) into static::$pdo
            try {
                //if no connection set try setting this one using PDO class
                static::$pdo = new PDO(
                'mysql:dbname='.config::get('db_name').';host='.config::get('db_host').';charset='.config::get('db_charset', 'utf8'), //'mysql:dbname=database_name;host=locahost;charset=utf8',
                config::get('db_user'),
                config::get('db_pass')
                );
                //set level of error reporting
                static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                //this prints out possible connection errors
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        return static::$pdo;
        }
        //this will run sql query and return the result
        public static function query($sql, $subs = array())
        {
            //$pdo->query($sql); this is easy to write but it is less secure
            $pdo = static::pdo();
            //this prepares a statement out of sql
            $stmt = $pdo->prepare($sql);
            //this executes the prepared statement
            $stmt->execute($subs);

            return $stmt;
            // it is not safe to put data straight to query, that's why we have
            //$substitutions
        }
    }