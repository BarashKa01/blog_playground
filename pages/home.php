<?php

use App\Table\Article;
use App\Table\Category;

?>
    <div class="row">
        <div class="col-sm-8">
            <?php foreach (Article::getLast() as $post) : ?>
                <h2><a href="<?= $post->url; ?>"><?= $post->title; ?></a></h2>
                <p><em><?= $post->category ?></em></p>
                <?= $post->extract; ?>
            <?php endforeach; ?>
        </div>
    

        <div class="col-sm-4">
        <ul>
        <?php foreach(Category::getAll() as $category): ?>
            </ul>
                <li><a href="<?= $category->url; ?>"><?= $category->name; ?></a></li> 
            </ul>
        <?php endforeach; ?>

    </div>
</div>
