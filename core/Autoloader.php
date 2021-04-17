<?php
namespace Core;

class Autoloader {
    static function autoload($className){
        if (__NAMESPACE__ != "App"){
            if (strpos($className, __NAMESPACE__) === 0) {
                $className = str_replace(__NAMESPACE__, '', $className);
                require '__DIR__'.$className .'.php';
            }
        }else{
            require '..\\'.$className.'.php';
        }
       
    }

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}