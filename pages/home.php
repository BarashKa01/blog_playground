<?php

$pdo = new PDO('mysql:dbname=blog_playground;host=localhost', 'root', '');
//Verbose mode
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec('INSERT INTO article SET title="Title", "date="'. date('Y-ù-d H:i:s'). '"');

$statement = $pdo->query('SELECT * FROM article');

$datas = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($datas[0]->title);