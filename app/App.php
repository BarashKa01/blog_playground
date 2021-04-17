<?php

use App\Database;
namespace App;

use App\Table\Table;

class App{

    public $title = 'My super blog, oh yeah';

    private static $_instance;
    private $db_instance;

    public function __construct(){
        $this->settings = require dirname(__DIR__).'\config\config.php';
       }

       //Singleton part
       public static function get_instance(){
           if(is_null(self::$_instance)){
               self::$_instance = new App();
           }

           return self::$_instance;
       }

       //Factory part
       public function getTable($tableName){
           $class_name = '\\App\\Table\\' .ucfirst($tableName). 'Table';
            return new $class_name();
       }

       public function getDb(){
           if(is_null($this->db_instance)){
            $config = Config::get_instance();
            new Database($config->getProp('db_name'), $config->getProp('db_host'), $config->getProp('db_user'), $config->getProp('db_pass'));
           }
           return $this->db_instance;
       }

}