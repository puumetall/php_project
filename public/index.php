<?php

spl_autoload_register(function($className){
    $className = substr($className, strlen('App\\'));
    require_once(__DIR__ . "/../src/$className.php");
});

//var_dump($_SERVER);

switch($_SERVER['REQUEST_URI']) {
    case '/':
        include(__DIR__ . '/../views/home.php');
        break;
    case '/add':
        echo "add";
        break;
    case '/new':
        include(__DIR__ . '/../views/new.php');
        break;
    default:
        echo "404";
        break;
}