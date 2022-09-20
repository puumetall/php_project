<?php

namespace App\Models;

use App\DB;

class Model
{
    public static $table;

    public static function all(){
        $db = new \App\DB;
        return $db->all(static::$table, static::class);
    }


    public function save(){
        $db = new DB();
        $fields = get_object_vars($this);
        unset($fields['id']);
        foreach ($fields as $key => $field) {
            if ($field === NULL) {
                unset($fields[$key]);
            }
        }
        if(!$this->id) {
            $db->insert(static::$table, $fields);
        } else {
            $db->update($this->id, static::$table, $fields);
        }
    }

    public static function find($id){
        $db = new DB();
        return $db->find($id, static::$table, static::class);
    }
    public function delete(){
        $db = new DB();
        $db->delete($this->id, static::$table);
    }

    public static function where($field, $value){
        $db = new DB();
        return $db->where($field, $value, static::$table, static::class);
    }
}