<?php

use App\Database;

$db = new Database('blog_playground','localhost' ,'root' ,'');
$datas = $db->query('SELECT * FROM article');

var_dump($datas);