<?php

use App\App;
use App\Table\Article;
use App\Table\Category;

$posts = Article::getLast();
$categories = Category::getAll();

if ($posts === false || $categories === false) {
    App::notFound();
}

?>
<div class="row col-12">
    <div class="col-8">
        <?php foreach ($posts as $post) { ?>
            <h2><a href="<?= $post->url; ?>"><?= $post->title; ?></a></h2>
            <p><em><?= $post->category ?></em></p>
            <?= $post->extract; ?>
        <?php } ?>
    </div>

    <div class="col-4">
        <?php foreach ($categories as $category){ ?>
            </ul>
            <li><a href="<?= $category->url; ?>"><?= $category->name; ?></a></li>
            </ul>
        <?php } ?>

    </div>
</div>