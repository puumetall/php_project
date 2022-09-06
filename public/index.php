<?php

class Person {
    public static $id;
    public $name;

    public static function getId(){
        echo $this->name;
        return self::$id;
    }
}

$person1 = new Person();
$person1->name = 'Kati';
Person::$id = 1;

$person2 = new Person();
$person2->name = 'Mati';
Person::$id = 2;

var_dump(Person::getId());
var_dump($person2::$id);