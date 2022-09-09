<?php

namespace App\Controllers;

class PostController {

    public function add(){
        if(trim($_POST['title']) && trim($_POST['body'])) {
            $posts = [];
            if(file_exists('posts.json')){
                $json = file_get_contents('posts.json');
                $posts = json_decode($json, true);
            }
            $posts[] = [
                'title' => $_POST['title'],
                'body' => $_POST['body']
            ];
            $json = json_encode($posts);
            $file = fopen('posts.json', 'w');
            fwrite($file, $json);
            fclose($file);
        }
        header('Location: /');
        die();
    }

    public function new(){
        view('new');
    }
}