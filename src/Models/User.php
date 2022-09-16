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

}