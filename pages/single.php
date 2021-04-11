<?php
$post = App\App::getDb()->prepare('SELECT * FROM article WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);
?>


<h1><?= $post->title ?></h1>

<p><?= $post->content ?></p>

<p><a href="index.php?page=home">Back to home</a></p>