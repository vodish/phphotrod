<?php
class aYY
{
    /** @var aYY */
    static $admin;
    

    public $name;

    public function __construct()
    {
        $this->name  =  'SuperAdmin';
    }


    public function getName()
    {
        return $this->name;
    }
    


}