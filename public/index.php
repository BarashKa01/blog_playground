<?php

session_start();
use App\Config;

require '../App/Autoloader.php';

App\Autoloader::register();

$config = new App\Config();

var_dump($config);
