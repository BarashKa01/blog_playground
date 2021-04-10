
<?php foreach ($db->query('SELECT * FROM article', 'App\Table\Article') as $post): ?>

<h2><a href="<?= $post->getURL(); ?>"><?=$post->title; ?></a></h2>
<?= $post->getExtract(); ?>

<?php endforeach; ?>