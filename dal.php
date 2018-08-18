<?php

class DBConnection 
{

    public function connect()
    {
         $host="127.0.0.1:3306";
         $user="root";
         $pass="root";

         $connectionString = "mysql:host=127.0.0.1:3306;dbname=june_batch";
         $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        
         $pdo = new PDO($connectionString,$user,$pass,$options);
         return $pdo;    
    }

    public function executeQuery($query,$type)
    {
        try
        {
            $pdo = $this->connect();
            $statement = $pdo->prepare($query);
            $success = $statement->execute();
            if($type == "select")
            return $statement->fetchAll();
            else
            return $success;    
        }
        catch(Exception $e)
        {
             var_dump($e);   
        }
        
    }
}

// $obj = new DBConnection;
// $executed = $obj->executeQuery("INSERT INTO `student`
// VALUES (NULL,'keyur','abc@xyz.com','9986654566')","insert");
// var_dump($executed);


























