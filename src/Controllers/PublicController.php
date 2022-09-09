<?php

namespace App\Controllers;

class PublicController {

    public function index(){
        $json = file_get_contents('posts.json');
        $posts = json_decode($json, true);
        view('home', compact('posts'));
    }
}