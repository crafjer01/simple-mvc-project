<?php

namespace App\Core\Database;

use Exception;
use PDO;
use PDOException;

class QueryBuilder
{
    protected $pdo;
    private $select;
    private $where;
    private $query;
    
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
       
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function select($table)
    {
        $this->query = "select * from {$table}";
        return $this;
    }

    public function where($field, $condition = [], $value)
    {
        if (empty($condition)) {
            $this->query  .= " where {$field} = '{$value}'";
        }

        return $this;
    }

    public function get()
    {   
        //die($this->query);

        $statement = $this->pdo->prepare($this->query);

        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function first()
    {   

        $statement = $this->pdo->prepare($this->query);

        $statement->execute();
        
        $result =  $statement->fetchAll(PDO::FETCH_OBJ);

        return $result[0];
    }

    public function insert($table, $params) {

        $sql = sprintf(
            'insert into %s (%s) values (%s)', 
            $table, 
            implode(',', array_keys($params)),
            ':' . implode(',:', array_keys($params))
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($params);

        }catch(Exception $e) {
            die('Algo salio mal.');
        }
    }


}