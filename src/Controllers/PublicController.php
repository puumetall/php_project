<?php

namespace App\Controllers;





use App\Models\Post;
use App\Models\User;

class PublicController {

    public function index(){

        $posts = Post::all();
//        $users = User::all();
//        var_dump($users);
        view('home', compact('posts'));
    }
}