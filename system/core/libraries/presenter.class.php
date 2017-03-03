<?php

class presenter
{
    protected static $title = null;

    public static function present($content)
    {
        //navigation of the page template
        $navigation = new view('navigation'); //  /system/project/views/navigation.php
        //definitely the page needs footer
        $footer = new view('footer');
        
        //wrapper
        $wrapper = new view('wrapper');
        $wrapper->navigation = $navigation;
        $wrapper->page_layout = $content;
        $wrapper->footer = $footer;
        $wrapper->title = static::$title;

        echo $wrapper;
    }

    public static function setTitle($title)
    {
        static::$title = $title;
    }

}