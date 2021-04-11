<?php

namespace App\Table;

use App\App;

class Category extends Table
{

    protected static $table_name = "category";

    /**
     * 
     */
    public function getUrl()
    {
        return 'index.php?page=category&id=' . $this->id;
    }
}
