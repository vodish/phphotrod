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
	
	
	
	static function getprotocol()
	{
	    return 'http'. (!empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS'])?  's'  :  ''). '://';
	}
	
	static function gethost()
	{
	    $host	=	$_SERVER['HTTP_HOST'];
	    $host	=	preg_replace('#:\d+$#', '', $host); #убрать порт
	    return $host;
	}
	
	static function getsite()
	{
	    return  self::getprotocol(). self::gethost();
	}
	
	
	
	static function setcookie($name, $value, $lifetime=false, $host='')
	{
		$year	=	2 + date('Y');
		$host	=	$host?  $host:  null;
		
		if ($lifetime)
		{
            $t = setcookie ($name, $value,time()+$lifetime, '/', $host);
        }
        else {
            $t = setcookie($name, $value, mktime(1, 1, 1, 1, 1, $year), '/', $host);
        }
        
        return $t;
	}
	
	static function delcookie($name, $host='')
	{
	    $host  =	$host?  $host:  null;
	    
	    $t	   =	setcookie($name, '', (time()-1), '/', $host);
		
		return $t;
	}
	
	
	
	static function dump($var, $var_damp=false, $die=false)
	{
	    if ( !$var_damp )
	    {
	        echo '<pre style="max-width: 90%; overflow: auto;">'; print_r($var); echo '</pre>';
	    }
	    else {
	        echo '<pre style="max-width: 90%; overflow: auto;">'; var_dump($var); echo '</pre>';
	    }
	    
	    if ( $die )    die;
	}
	
	
}