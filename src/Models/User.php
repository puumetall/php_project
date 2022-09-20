<?php

namespace App\Models;

class User extends Model
{
    public static $table = 'users';

    public $id;
    public $fname;
    public $lname;
    public $email;
    public $password;

    public static function auth(){
        if($_SESSION['user_id']){
            return self::find($_SESSION['user_id']);
        }
        return null;
    }

}