<?php
class siteYYYY
{
    static function foo()
    {
        load::pr(time());
        print_r("method in class `" .__CLASS__. "`\n");
    }
}