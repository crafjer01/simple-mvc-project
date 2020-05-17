
<?php

$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contacto', 'PageController@contact');
$router->get('usuarios', 'UserController@index');
$router->post('usuarios', 'UserController@store');