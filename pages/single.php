<?php

use App\App;
use App\Table\Article;
use App\Table\Category;

$post = Article::findById($_GET['id']);
if($post === false) {
    App::notFound();
}

$categ = Category::findById($post->category_id);
App::setTitle($post->title);
?>


<h1><?= $post->title ?></h1>
<p><em><?= $categ->name ?></em></p>
<p><?= $post->content ?></p>

<p><a href="index.php?page=home">Back to home</a></p>