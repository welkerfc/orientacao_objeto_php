<?php
namespace App\Entity;
use \App\Db\Database;
class Vaga{

  /**
   *Identificado unico
   *@var integer
   */

   public $id;

   /**
    *
    *@var string
    */
   public $titulo;


   /**
    *
    *@var string
    */
   public $descricao;


   /**
    *
    *@var string(s/n)
    */
   public $ativo;


   public $data;


   public function cadastrar(){
     //definir data
     $this->data = date("Y-m-d H:i:s");

     //inserir vaga no banco
    $obDatabase = new Database('vagas');
    $obDatabase->insert([
      'titulo' => $this->titulo,
      'descricao' => $this->descricao,
      'ativo' => $this->ativo,
      'data' => $this->data

    ]);
   }

}

 ?>
