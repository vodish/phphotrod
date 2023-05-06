<?php
class sYY
{
    static function test()
    {
        load::vd("method " .__METHOD__);
        load::vd(time());
    }
    
    static function composerAutoload()
    {
        require_once  __DIR__.'/../../vendor/autoload.php';
        
    }
}