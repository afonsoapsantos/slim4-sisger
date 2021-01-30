<?php
namespace src\traits;

use PDOException;

trait Create {
    
    public function create(array $args)
    {
       try{

            $sql = sprintf(
                'INSERT INTO %s (%s) VALUES (%s)', $this->table,
                implode(',', array_keys($args)),
                ':' . implode(',:', array_keys($args))
            );

            $prepared = $this->con->prepare($sql);
            //var_dump($prepared);
            
            //return $prepared->execute($args);

       } catch(PDOException $e) {

       }
    }

}