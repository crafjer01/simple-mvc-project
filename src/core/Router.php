<?php

namespace App\core;

use Exception;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require __DIR__ .'/../app/' . $file;

        return $router;
    }

    public function define($routers)
    {
        $this->routes = $routers;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $methodType)
    {
        if(array_key_exists($uri, $this->routes[$methodType])) {
            return $this->callAction(
                ...explode('@',  $this->routes[$methodType][$uri])
            );
        }

        throw new Exception('La ruta no existe');
    }

    private function callAction($controller, $method) 
    {
        $instaceController = "App\\app\Controllers\\{$controller}";

        $controller = new $instaceController;

        if(! method_exists($controller, $method)) {
            throw new Exception("El metodo {$method} no existe en el controlador {$controller}");
        }

        return  $controller->$method();
    }
}