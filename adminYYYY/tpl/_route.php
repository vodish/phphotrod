<?php
#############################################################
# ROUTER adminYYYY
#############################################################

aYY::$admin =   new aYY();
$path       =   $_SERVER['REQUEST_URI'];


if      ( $path == '/' )                     $layout   =   'main.tpl.php';
elseif  ( substr($path, 0, 5) == '/next' )   $layout   =   'next.tpl.php';



return  $layout;