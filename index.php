<?php


//set error displaying
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

//define where the document root is, because php doesn't know, so we need to tell him

define('DOCROOT', __DIR__);

//var_dump(__DIR__); //searches for source directory
//var_dump(__FILE__);//searches for the path to the current file


//start the bootstraping process
require_once(DOCROOT.'/system/project/config/bootstrap.php');


//start the application

//try some code
$page_to_display = request::get('page', 'home');

var_dump($page_to_display);
//separate calling
// $actor_name = request::post('name');
// $actor_bio = request::post('biography');
// var_dump($text_field);
if(request::isPost()){
    $actor = request::post('actor');
    var_dump($actor);
}
$controller_name = router::getControllerName();
var_dump($controller_name);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Some page</title>
        <style>
            form{
                background-color: pink;
                padding:10px;
                width: 200px;
            }
            input{
                margin:5px;
            }
        </style>
    </head>
    <body>

        <form action="" method="post">
        <input type="text" name="actor[name]" value="<?php echo htmlspecialchars(request::post('actor')['name']);?>"><br>
        <textarea name="actor[biography]"> <?php echo htmlspecialchars(request::post('actor')['biography']);?> </textarea><br>
        <input type="submit" value="voila!">
        </form>


    </body>
</html>