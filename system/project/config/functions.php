<?php
function vd($variable){
    var_dump($variable);
}
function dd($variable){
    vd($variable);
    die();
}