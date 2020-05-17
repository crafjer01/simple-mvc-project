<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/core/bootstrap.php';

use App\Core\Request;
use App\core\Router;

Router::load('router.php')->direct(Request::uri(), Request::method());

