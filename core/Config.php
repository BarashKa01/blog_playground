<?php

namespace Core;

class Config{

    private static $_instance;
    private $settings = [];

    public function __construct($file){
     $this->settings = require ($file);
    }

    //Singleton part
    public static function get_instance($file){
        if (is_null(self::$_instance)){
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }

    
    public function getProp($propName){
        if (isset($this->settings[$propName])){
            return $this->settings[$propName];
        }else{
            return null;
        }

    }
}