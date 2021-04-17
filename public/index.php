<?php

use App\Config;

require '../App/App.php';

App::load();

$app = App::get_instance();

$posts = $app->getTable('Articles');
$categ = $app->getTable('Categories');
$users = $app->getTable('Users');

var_dump($posts->all());
var_dump($categ);
var_dump($users);