<?php

namespace App\Controllers;





use App\Models\Post;

class PublicController {

    public function index(){

        $posts = Post::all();
        view('home', compact('posts'));
    }
}