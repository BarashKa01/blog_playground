<?php

session_start();


use App\Config;

require '../App/Autoloader.php';

App\Autoloader::register();

$app = App\App::get_instance();

$posts = $app->getTable('Articles');
$categ = $app->getTable('Categories');
$users = $app->getTable('Users');

var_dump($posts->all());
var_dump($categ);
var_dump($users);