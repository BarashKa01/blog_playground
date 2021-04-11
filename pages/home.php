
<?php foreach ($db->query('SELECT * FROM article', 'App\Table\Article') as $post): ?>
<h2><a href="<?= $post->url; ?>"><?=$post->title; ?></a></h2>
<?= $post->extract; ?>
<?php endforeach; ?>