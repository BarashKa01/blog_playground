<?php

namespace App\Table;

use App\App;

class Table
{

    protected static $table_name;

    private static function getTable()
    {
        if (static::$table_name === null) {
            $className = explode('\\', get_called_class());
            static::$table_name = strtolower(end($className));

        }
        return static::$table_name;
    }

    public static function getAll()
    {
        return App::getDb()->query("SELECT * 
        FROM " . static::getTable() . "
        ", get_called_class());
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
}
