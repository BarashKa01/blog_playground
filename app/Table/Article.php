<?php

namespace App\Table;

class Article {

    public function __get($name)
    {
        
    }


    public function getURL(){
        return 'index.php?page=article&id=' . $this->id;
    }

    public function getExtract(){
        $html = '<p>'. substr($this->content, 0, 50).'</p>';
        $html .= '<p><a href="' .$this->getURL(). '">See more</a></p>';
        return $html;
    }
}