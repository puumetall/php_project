<?php
namespace App;
class DB {
    private $conn;


    public function __construct(){
        try {
            $this->conn = new \PDO('sqlite:database.sqlite');
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
           
        } catch (\Exception $e){
            var_dump($e);
        }
    }

    public function all($table){
        $stmt = $this->conn->prepare('SELECT * FROM ' . $table . ';');
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, \App\Models\Post::class);
        return $stmt->fetchAll();
    }
}