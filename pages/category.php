<?php

use App\App;
use App\Table\Article;
use App\Table\Category;

$categ = Category::findById($_GET['id']);

if ($categ === false) {
    App::notFound();
}

$posts = Article::findByCategory($_GET['id']);
$categories = Category::getAll();

app::setTitle($categ->name)

/**var_dump($posts);
var_dump($categ);
var_dump($categories);
 */
?>

<div class="row col-12">
    <div class="col-sm-8">
        <h1><?= $categ->name ?></h1>
        <h2>Related articles</h2>
        <?php foreach ($posts as $post) : ?>
            <h2><a href="<?= $post->url; ?>"><?= $post->title; ?></a></h2>
            <p><em><?= $post->category ?></em></p>
            <?= $post->extract; ?>
        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">
        <?php foreach ($categories as $category) { ?>
            </ul>
            <li><a href="<?= $category->url; ?>"><?= $category->name; ?></a></li>
            </ul>
        <?php } ?>
        <p><a href="index.php?page=home">Back to home</a></p>
    </div>
</div>