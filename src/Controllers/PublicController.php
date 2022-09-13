<?php

namespace App\Controllers;

class PublicController {

    public function index(){
        $db = new \App\DB;
        $posts = $db->all('posts');
        view('home', compact('posts'));
    }
}