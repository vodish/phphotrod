<?php
# specific vars for siteYYYY
#
// db::init();


# type first template for load::$layout
#
$layout  =  'main.tpl.php';

if      ( url::$path=='/'       )   $layout =  'main.tpl.php';
elseif  ( url::start('/next')   )   $layout =  'next.tpl.php';


return  $layout;