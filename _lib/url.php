<?php
class url
{
    static $url;
    
    
    static function parse($url)
    {
        $parse  =   parse_url($url);
        $parse['query'  ]   =   $query  =  $parse['query'] ?? null;
        $parse['dir'    ]   =   array();
        $parse['level'  ]   =   $parse['path']=='/'?  array():  explode('/', trim($parse['path'], '/'));
        
        # query params
        parse_str($query ?? '', $parse['query']);
        
        # dir path
        $dir    =   '';
        foreach ($parse['level'] as $k => $v)  $parse['dir'][$k]  =  $dir .= '/' .$v;
        

        return $parse;
    }

    
    static function start($str)
    {
        $strlen =   strlen($str);
        $start  =   substr(self::$url['path'], 0, $strlen);
        
        return  $str == $start;
    }
    
    
    static function fset( $arr=array(), $get=array() )
    {
        $get   =   empty(self::$url) || $get===null?  array():  self::$url;
        
        foreach ($arr as $k=>$v)
        {
            if ( $v === null )
            {
                unset($get[$k]);
                unset($arr[$k]);
            }
        }
        
        $get   =   array_merge($get, $arr);
        $get   =   $arr === null ?  array():  $get;
        
        
        return  ($get? '?': ''). http_build_query($get);
    }
    


	static function protocol()
	{
	    return 'http'. (!empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS'])?  's'  :  ''). '://';
	}
	
	static function host()
	{
	    return  preg_replace('#:\d+$#', '', $_SERVER['HTTP_HOST']);
	}
	
	static function site()
	{
	    return  self::protocol(). self::host();
	}
	
	

}