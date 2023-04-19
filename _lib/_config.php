<?php
session_start();

error_reporting(E_ALL | E_NOTICE);
ini_set('display_errors','On');


# autoload class by use from current dir
#
spl_autoload_register( function ($name) {
    
    $name   =   strtr($name, ['\\'=>'/']);
    $file   =   dirname(__FILE__). '/' .$name. '.php';
    
    print_r($file); echo "<br>";
    
    if ( !file_exists($file) )    return ;
    
    require_once $file;
});


# optional global vars
#
url::$url       =   url::parse($_SERVER['REQUEST_URI']);


# set template dirpath
# set start layout file_name (and adds project setting)
# render html output
#
load::$dirtpl   =   dirname($_SERVER['DOCUMENT_ROOT']). '/tpl';
#
load::$layout   =   require_once  load::$dirtpl. '/_route.php';
#
load::renderpage();