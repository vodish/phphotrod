<?php
class url
{
    static $url;
    
    
    static function parse($url)
    {
        $parse         =   parse_url($url);
        $parse['dir']  =   $parse['path']=='/'?  array():  explode('/', trim($parse['path'], '/') );
        
        
        # get params
        #
        if ( isset($parse['query']) )
        {
            parse_str($parse['query'], $parse['query']);
        }
        else {
            $parse['query']    =   array();
        }
        
        
        # path levels
        #
        $path           =   '';
        $parse['p0']    =   '/';
        #
        foreach ($parse['dir'] as $k => $v)
        {
            $parse['p'.$k] = $path .= '/' .$v;
        }
        
        
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
        $get   =   empty(self::$query) || $get===null?  array():  self::$query;
        
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
    
}