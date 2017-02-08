<?php

class url 
{
    public static function to($page_name = '', $params = array())
    {
        if($page_name)
        {
            $params['page'] = $page_name;
            //array('page' => 'contact')
        }

        $query_string = http_build_query($params);
        //this function builds a http query

        return config::get('base_url') . ($query_string ? '?' . $query_string : '');
        // using config::get('base_url') creates a full string for browser bar starting with
        //http: my website - it creates absolute path to the website whicj is better for seo and search engines
        
        
    }



}