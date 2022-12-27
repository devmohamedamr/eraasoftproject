<?php

require "../vendor/autoload.php";

use Eraasoft311\Mvc\Database\DB;
use Eraasoft311\Project\Core\Route;
use Eraasoft311\Project\Core\Kernel;


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();





// echo "<pre>";

// print_r(Route::$routes);





(new Kernel)->run();
