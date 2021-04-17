<?php

namespace App\Table;

use App\App;

class Table
{
    protected static $table_name;

    public static function getAll()
    {
        return self::query("SELECT * 
        FROM " . static::$table_name . "
        ", get_called_class());
    }

    public static function findById($id)
    {
        return self::query("SELECT * 
        FROM " . static::$table_name . " WHERE id = ?
        ", $id, get_called_class(), true );
    }

    /**
     * @__get Magic method: Retrieve an unknown property by checking the property getter
     * @name String: name of the property requested
     */
    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        $this->$name = $this->$method();
        return $this->$name;
    }

    public static function query($statement, $attributes = null, $only_one = false) {

        if ($attributes) {
            return App::getDb()->prepare($statement, [$attributes], get_called_class(), $only_one);
        }else{
            return App::getDb()->query($statement, get_called_class(), $only_one);
        }
    }
}
