<?php

namespace App;

class Router {
    private static $routes = [];
    private $path;
    private $method;


    public function __construct($method, $path){
        $this->method = $method;
        $this->path = $path;
    }

    public function match(){
        foreach(self::$routes as $route) {
            if($route['method'] === $this->method && $route['path'] === $this->path){
                return $route;
            }
        }
        echo "404";
    }

    public static function addRoute($method, $path, $action){
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'action' => $action
        ];
    }
}