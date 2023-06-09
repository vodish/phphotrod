<?php
class db
{
    /** @var db_pdo */
    static $db;
    
    static function init()
    {
        self::$db = new db_pdo();
    }
    
    static function query($query, $vars=array())
    {
        self::$db->query($query, $vars);
    }
    
    static function fetch()
    {
        return self::$db->fetch();
    }
    
    static function select($query, $params=[])
    {
        return self::$db->select($query, $params);
    }
    
    static function one($query, $vars=array())
    {
        return self::$db->one($query, $vars);
    }
    
    static function v($value)
    {
        return self::$db->v($value);
    }
    
    static function v2input($value)
    {
        return self::$db->v2input($value);
    }
    
}