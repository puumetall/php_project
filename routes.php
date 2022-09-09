<?php

use App\Router;
use App\Controllers\PostController;
use App\Controllers\PublicController;
Router::addRoute('GET', '/', [PublicController::class, 'index']);

Router::addRoute('GET', '/new', [PostController::class, 'new']);

Router::addRoute('POST', '/add', [PostController::class, 'add']);