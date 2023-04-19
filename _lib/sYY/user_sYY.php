<?php
class user_sYY
{
    static function getName()
    {
        load::pr('I cat use class load anywhere!');

        return 'My name ' .__METHOD__;
    }
    
}