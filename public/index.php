<?php

require '../App/Autoloader.php';

App\Autoloader::register();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

ob_start();

if ($page === 'home'){
    require '../pages/home.php';
} elseif ($page === 'single') {
    require '../pages/single.php';
}

$titleContent = ob_get_clean();
require '../pages/templates/default.php';