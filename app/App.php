<?php

use App\Database;
namespace App;

class App{

    const DB_NAME = 'blog_playground' ;
    const DB_USER = 'root' ;
    const DB_HOST = 'localhost' ;
    const DB_PASS = '';

    private static $database;
    private static $pageTitle = "Blog playground";

    public static function getTitle(){
       return static::$pageTitle;
    }

    public static function setTitle($title){
        static::$pageTitle = $title;
    }

    public static function getDb(){
        
        if(self::$database === null){
            self::$database = new Database(self::DB_NAME,self::DB_HOST ,self::DB_USER , self::DB_PASS);
        }
        return self::$database;
    }

    public static function notFound(){
            header("HTTP/1.0 404 Not found");
            header('Location:index.php?p=404');
    }

}