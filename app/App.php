<?php

use App\Database;
namespace App;

class App{

    public $title = 'My super blog, oh yeah';

    private static $_instance;

    public function __construct(){
        $this->settings = require dirname(__DIR__).'\config\config.php';
       }

       public static function get_instance(){
           if(is_null(self::$_instance)){
               self::$_instance = new App();
           }

           return self::$_instance;
       }

}