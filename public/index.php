<?php

class Box {
    private int $height;
    public $width;
    public $length;

    public function __construct($w, $h, $l){
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
    }
    
    public function setHeight(int $height){
        if($height>0){
            $this->height = $height;
        }
    }

    public function volume(){
        return $this->height * $this->width * $this->length;
    }

    public function __toString(){
        return "box w: $this->width, h: $this->height, l: $this->length and volume is {$this->volume()}";
    }

    public function __get($name){
        var_dump("trying to access $name");
    }

    public function __set($name, $value){
        var_dump("trying to set $name with value $value");
    }

    public function __call($name, $args) {
        var_dump("trying to call method with $name with args" . implode(',', $args));
    }
    public function __invoke(...$args){
        var_dump("trying to use object as function with args: " . implode(',', $args));
    }

    public function __destruct(){
        var_dump('object was destroyed');
    }
}

class SteelBox extends Box {
    use Material;
    public $weight;
}

class Shoes {
    use Material;
}

trait Material {
    public $material;

    public function getMaterial(){
        return $this->material;
    }
}

$num1 = 10;
$num2 = $num1;
$num2 = 20;
var_dump($num1);
var_dump($num2);

$box1 = new SteelBox(10, 10, 10);
$box2 = clone $box1;
$box2->setHeight(20);
var_dump($box1);
var_dump($box2);
$shoes = new Shoes();
var_dump($shoes);

