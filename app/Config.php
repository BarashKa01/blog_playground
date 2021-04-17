<?php

namespace App;

class Config{

    private static $_instance;
    private $settings = [];

    public function __construct(){
     $this->settings = require dirname(__DIR__).'\config\config.php';
    }

    //Singleton part
    public static function get_instance(){
        if (is_null(self::$_instance)){
            self::$_instance = new Config();
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