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
    public static function redirect($url, $code = 302)
    {
       $url = url::to($url);

    if($code == 'refresh')
    {
        header('Refresh: 0; url='.$url);
    }
    else
    {
        $codes = array
        (
            '301' => 'Moved Permanently',
            '302' => 'Found',
            '303' => 'See Other',
            '304' => 'Not Modified',
            '305' => 'Use Proxy',
            '307' => 'Temporary Redirect'
        );

        $code = isset($codes[$code]) ? $code : '302';

        header('HTTP/1.1 '.$code.' '.$codes[$code]);
        header('Location: '.$url);
    }

    exit('<h1>'.$code.' - '.$codes[$code].'</h1><p><a href="'.$url.'">'.$url.'</a></p>');
}


}