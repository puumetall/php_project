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

    public function all($table, $class=\stdClass::class){
        $stmt = $this->conn->prepare('SELECT * FROM ' . $table . ';');
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }
}