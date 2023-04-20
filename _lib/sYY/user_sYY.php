<?php
class user_sYY
{
    static function getName()
    {
        load::pr('I can use class load anywhere!');

        return 'My name ' .__METHOD__;
    }
    
}