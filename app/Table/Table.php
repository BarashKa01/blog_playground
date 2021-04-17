<?php

namespace App\Table;

use App\Database\MySqlDatabase;

class Table{

    protected $table;
    protected $db;

    //Improvement : MySqlDatabase can be refactored as an interface
   public function __construct(MySqlDatabase $db)
   {
       $this->db = $db;
       if (is_null($this->table)){
        $splittedPath = explode('\\', get_class($this));
        $class_name = end($splittedPath);
 
        $this->table = strtolower(str_replace('Table', '', $class_name));
       }
   }

   public function all(){
    return $this->db->query('SELECT * FROM articles');
   }
}