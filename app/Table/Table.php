<?php

namespace App\Table;

class Table{

    protected $table;

   public function __construct()
   {
       if (is_null($this->table)){
        $splittedPath = explode('\\', get_class($this));
        $class_name = end($splittedPath);
 
        $this->table = strtolower(str_replace('Table', '', $class_name));
       }
   }
}