<?php

use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;
use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database']['test'])
));

function view($view, $data = []) 
{
    extract($data);

    return require  __DIR__ ."/../app/views/{$view}.view.php";
}

function redirect($path)
{
    header("Location: {$path}");
}


