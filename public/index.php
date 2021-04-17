<?php

require '../App/Autoloader.php';

App\Autoloader::register();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

ob_start();

//Routing
if ($page === 'home'){
    require '../pages/home.php';
} elseif ($page === 'article') {
    require '../pages/single.php';
} elseif ($page === 'category') {
    require '../pages/category.php';
}

$titleContent = ob_get_clean();
require '../pages/templates/default.php';