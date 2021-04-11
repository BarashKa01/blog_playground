<?php

require '../App/Autoloader.php';
use App\Database;

App\Autoloader::register();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

//Db init
$db = new Database('blog_playground','localhost' ,'root' ,'');

ob_start();

//Routing
if ($page === 'home'){
    require '../pages/home.php';
} elseif ($page === 'article') {
    require '../pages/single.php';
}

$titleContent = ob_get_clean();
require '../pages/templates/default.php';