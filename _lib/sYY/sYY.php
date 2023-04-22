<?php
class sYY
{
    static function test()
    {
        load::dd("method " .__METHOD__);
        load::dd(time());
    }
    
    static function composerAutoload()
    {
        require_once  __DIR__.'/../../vendor/autoload.php';
        
    }
}