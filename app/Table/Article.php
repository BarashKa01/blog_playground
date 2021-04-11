<?php

namespace App\Table;

class Article {

    /**
     * @__get Magic method: Retrieve an unknown property by checking the property getter
     * @name String: name of the property requested
     */
    public function __get($name)
    {
        $method = 'get'.ucfirst($name);
        $this->$name = $this->$method();
        return $this->$name;
    }

    /**
     * 
     */
    public function getUrl(){
        return 'index.php?page=article&id=' . $this->id;
    }
    
    /**
     * 
     */
    public function getExtract(){
        $html = '<p>'. substr($this->content, 0, 50).'</p>';
        $html .= '<p><a href="' .$this->getUrl(). '">See more</a></p>';
        return $html;
    }
}