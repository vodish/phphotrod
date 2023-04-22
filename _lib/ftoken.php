<?php
class ftoken
{
    static $limit = 15;


    static function set()
    {
        $token  =   md5( session_id(). time() );
        
        preg_replace_callback('#[3-9]#', function($m) use ($token) {
            
            $value  =   str_split($token, $m[0]);
            $value  =   array_reverse($value);
            $value  =   implode($value);

            $_SESSION['ftoken'][ $value ] =  time();

        }, $token, 1);
        
        
        for($c=count($_SESSION['ftoken']);  $c > self::$limit;  $c--)
        {
            array_shift($_SESSION['ftoken']);
        }
        
        return '<input type="hidden" name="t" value="' .$token. '" />';
    }

}