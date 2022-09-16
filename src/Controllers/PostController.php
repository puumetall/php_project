<?php

namespace App\Controllers;

use App\Models\Post;

class PostController {

    public function add(){

        if(trim($_POST['title']) && trim($_POST['body'])) {
            $post = new Post();
            $post->body = $_POST['body'];
            $post->title = $_POST['title'];
            $post->save();
        }
        header('Location: /');
        die();
    }

    public function new(){
        view('new');
    }

    public function show(){
        $id = $_GET['id'];
        $post = Post::find($id);
        view('show', compact('post'));
    }

    public function edit(){
        $id = $_GET['id'];
        $post = Post::find($id);
        view('edit', compact('post'));
    }
    public function update(){
        $id = $_GET['id'];
        $post = Post::find($id);
        $post->body = $_POST['body'];
        $post->title = $_POST['title'];
        $post->save();
        header('Location: /');
        die();
    }
    public function delete(){
        $id = $_GET['id'];
        $post = Post::find($id);
        $post->delete();
        header('Location: /');
        die();
    }
}