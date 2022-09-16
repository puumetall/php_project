<?php

use App\Router;
use App\Controllers\PostController;
use App\Controllers\PublicController;
Router::get('/', [PublicController::class, 'index']);
Router::get('/new', [PostController::class, 'new']);
Router::post('/add', [PostController::class, 'add']);
Router::get('/posts/show', [PostController::class, 'show']);
Router::get('/posts/edit', [PostController::class, 'edit']);
Router::post('/posts/edit', [PostController::class, 'update']);
Router::get('/posts/delete', [PostController::class, 'delete']);