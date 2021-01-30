<?php
namespace src\traits;

use PDOException;

trait Update {
    
    public function update(array $args)
    {
        $fields = $args['fields'];
        $where = $args['where'];

        $updateArgs = '';
        foreach (array_keys($fields) as $field) {
            $updateArgs .= "{$field} = :{$field},";
        }

        $updateArgs = rtrim($updateArgs, ',');
        $updateWhere = array_keys($where);
        $bind = array_merge($fields, $where);
        $sql = sprintf(
            'update %s set %s where %s', $this->table, $updateArgs,
            "{$updateWhere[0]} = :{$updateWhere[0]}"
        );

       try{
           $prepared = $this->con->prepare($sql);
           return $prepared->execute($bind);
       } catch(PDOException $e) {
           var_dump($e->getMessage());
       }
    }

}