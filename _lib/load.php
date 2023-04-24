<?php
class load
{
    static	$dirtpl;
    static	$layout;
	static	$tpl;
	static	$body;
	
    static	$title;
    

    static function renderpage()
    {
		do {
            self::$tpl      =   self::$layout;
            ob_start();
            require_once        self::$dirtpl. '/' .self::$layout;
            self::$body     =   ob_get_clean();
        }
        while (self::$tpl != self::$layout);
        
        die( self::$body );
    }
    
    
	
	static function makefile($file, $tpl, $addtime=true, $php=true)
	{
	    chdir($_SERVER['DOCUMENT_ROOT']);
	    
	    $dirlib    =   dirname(__FILE__);
	    $file      =   trim($file, '/');
	    $dir       =   dirname($file);
	    $md5file   =   file_exists($file)?  md5_file($file):  '';
	    
	    
	    $tplfile   =   trim($tpl, '/');
	    if ( file_exists(self::$dirtpl. '/' .$tplfile) )   $tplfile =  self::$dirtpl. '/' .$tplfile;
	    if ( file_exists(      $dirlib. '/' .$tplfile) )   $tplfile =        $dirlib. '/' .$tplfile;
	    
	    
	    if ( !file_exists($dir) )
	    {
	        umask(0);
	        mkdir($dir, 0777, true);
	    }
	    
	    
	    if ( !$php || in_array(substr($tplfile, -3, 3), array('png','gif','jpg','peg')) )
	    {
	        $md5tpl    =   md5_file($tplfile);
	        
	        if ( $md5file != $md5tpl )   copy($tplfile, $file);
	    }
	    elseif ( !file_exists($tplfile) )
	    {
	        $md5tpl    =   md5($tpl);
	        
	        if ( $md5tpl != $md5file ) file_put_contents($file, $tpl, LOCK_EX);
	    }
	    else
	    {
	        ob_start();
    	    require_once $tplfile;
    	    $content   =   ob_get_clean();
    	    $md5tpl    =   md5( $content );
    	    
    	    if ( $md5tpl != $md5file )     file_put_contents($file, $content, LOCK_EX);
	    }
	    
	    
	    return  '/'.$file. ($addtime? '?'.$md5tpl: '');
	}
	
	

    static function redir($url, $code='')
	{
	    if ( $code==301 )      header('HTTP/1.1 301 Moved Permanently');
	    
		header('Location: '. $url);
		die;
	}
	
	

	static function d($var, $die=false)
	{
	    echo '<pre style="max-width: 90%; overflow: auto;">'; print_r($var); echo '</pre>';
	    
	    if ( $die )    die;
	}
	
	static function dd($var, $die=false)
	{
	    echo '<pre style="max-width: 90%; overflow: auto;">'; var_dump($var); echo '</pre>';
	    
	    if ( $die )    die;
	}
	
	
	
	static function setcookie($name, $value, $time=false, $host=null)
	{
		$time	=	$time ?  time()+$time :  mktime( 1, 1, 1, 1, 1, 2+date('Y') );

        return  setcookie($name, $value, $time, '/', $host);
	}
	
	static function delcookie($name, $host=null)
	{
	    return  setcookie($name, '', (time()-1), '/', $host);
	}
	
	
	
}