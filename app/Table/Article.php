<?php

namespace App\Table;

use App\App;

class Article extends Table
{

    protected static $table_name = "article";

    public static function getLast()
    {
        return self::query(
            "SELECT article.id, title, content, category.name as category 
        FROM " . self::$table_name . " 
        LEFT JOIN category 
        ON category_id = category.id"
        , __CLASS__);
    }

    /**
     * 
     */
    public function getUrl()
    {
        return 'index.php?page=article&id=' . $this->id;
    }

    /**
     * 
     */
    public function getExtract()
    {
        $html = '<p>' . substr($this->content, 0, 50) . '</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">See more</a></p>';
        return $html;
    }

    public static function findByCategory($id)
    {
        return self::query(
            "SELECT article.id, title, content, category.name as category 
        FROM " . self::$table_name . " 
        LEFT JOIN category 
        ON category_id = category.id
        WHERE category_id = ?"
        ,$id);
    }
    
}
