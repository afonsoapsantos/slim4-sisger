<?php
namespace src\traits;

use PDOException;

trait Delete {

    public function delete($field, $value)
    {
        try{
           $prepared = $this->con->prepare("DELETE FROM $this->table WHERE {$field} = :{$field}");
           $prepared->bindValue($field, $value);
           return $prepared->execute();
        }catch(PDOException $e) {
           var_dump($e->getMessage());
       }
    }

}