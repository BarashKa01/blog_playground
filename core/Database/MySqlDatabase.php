<?php

namespace Core\Database;

use \PDO;

class MySqlDatabase extends Database {

 private $db_name;
 private $db_host;
 private $db_username;
 private $db_pass;
 private $pdo;


public function __construct($db_name, $db_host, $db_username, $db_pass)
{
    $this->db_name = $db_name;
    $this->db_host = $db_host;
    $this->db_username = $db_username;
    $this->db_pass = $db_pass;
}

private function getPDO(){

    if($this->pdo === null){
        if ( $this->db_name != null && $this->db_host != null && $this->db_username != null){
            
            $pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_username, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Verbose mode
    
            $this->pdo = $pdo;
        }else{
            echo("Can't connect to the database, please review your configuration");
            return;
        }
    }
    return $this->pdo;
}

public function query($statement, $className = null, $only_one = false){
    $qry = $this->getPDO()->query($statement);

    if($className === null){
        $qry->setFetchMode(PDO::FETCH_OBJ);
    }else{
        $qry->setFetchMode(PDO::FETCH_CLASS, $className);
    }
    if ($only_one){
        $datas = $qry->fetch();
    }else{
        $datas = $qry->fetchAll();
    }

    return $datas;
    }


    public function prepare($statement, $attr, $className, $only_one = false){
        $request = $this->getPDO()->prepare($statement);

        if($request->execute($attr)){
            $request->setFetchMode(PDO::FETCH_CLASS, $className);
            if ($only_one){
                $datas = $request->fetch();
            }else{
                $datas = $request->fetchAll();
            }
            return $datas;
        }
    }

}