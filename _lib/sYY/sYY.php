<?php
class sYY
{
    static function test()
    {
        load::pr("method " .__METHOD__);
        load::pr(time());
    }
    
    static function composerAutoload()
    {
        require_once  __DIR__.'/../../vendor/autoload.php';
        
    }
}