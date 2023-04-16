<?php
#############################################################
# specific class for project "adminYYYY" as library
#
#
class admin
{
    static $admin;
    
    
    
    
    #############################################################
    # object
    #
    #
    public $id;
    public $email;
    public $name;
    
    public function __construct()
    {
        if ( empty($_COOKIE['token_admin']) )   return ;
        
        
        $admin  =   array();
        
        
        foreach ($admin as $k=>$v)
        {
            $this->$k = $v;
        }
        
    }
    #
    #
    #############################################################
    
    
    
}

