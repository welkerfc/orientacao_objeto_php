<?php

namespace App\Db;
use \PDO;
class Database{

  const HOST = 'localhost';
  const NAME = 'wdev_vagas';
  const USER = 'root';
  const PASS = '';

  private $table;
  private $connection;


  public function __construct($table = null){
    $this->table = $table;
    $this->setConnection();
  }

  private function setConnection(){
      try{

          $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
          $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      }catch(PDOExcepion $e){

      echo "<prev>"; print_r('ERROR:'.$e->getMessage()); echo "</prev>";

      }
  }

public function execute($query, $params = []){
  try{

  }catch(PDOExcepion $e){

  echo "<prev>"; print_r('ERROR:'.$e->getMessage()); echo "</prev>";

  }
}

public function insert($values){
    /*$this->titulo;
    $this->descricao;
    $this->ativo;
    $this->data;*/

    $fields = array_keys($values);
    $binds = array_pad([],count($fields), '?');

    $query = 'INSERT INTO '.$this->table.'('.implode(',',$fields).') VALUES('.implode(',',$binds).')';

    exit;
}



}


 ?>
