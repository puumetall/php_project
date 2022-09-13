<?php

namespace App\Models;

class Post {
    public $id;
    public $title;
    public $body;

    public function snippet(){
        return substr($this->body, 0, 50);
    }
}