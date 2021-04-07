<?php

require '..App//Autoloader.php';

App\Autoloader::register();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

if ($page === 'home'){
    require '../pages/home.php';
}