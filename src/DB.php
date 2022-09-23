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

    public function insert($table, $fields){
        $fieldNames = implode(', ', array_keys($fields));
        $values = [];
        foreach($fields as $field){
            $values[] = "'$field'";
        }
        $valuesString = implode(', ', $values);
        $sql = "INSERT INTO $table ($fieldNames)
        VALUES ($valuesString)";
        // use exec() because no results are returned
        $this->conn->exec($sql);
    }

    public function find($id, $table, $class=\stdClass::class){
        $stmt = $this->conn->prepare('SELECT * FROM ' . $table . ' WHERE id='. $id .';');
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }

    public function where($field, $value, $table, $class=\stdClass::class){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE $field='$value';");
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }


    public function update($id, $table, $fields){
        $updateKeyValue = [];
        foreach ($fields as $key=>$value){
            $updateKeyValue[] = $key . "=" . $value . "'";
        }
        $updateString = implode(', ', $updateKeyValue);
        $stmt = $this->conn->prepare('UPDATE '. $table . " SET $updateString WHERE id=$id;");
        $stmt->execute();
    }

    public function delete($id, $table){
        $sql = "DELETE FROM $table WHERE id=$id";

        // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}