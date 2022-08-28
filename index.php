<?php

class Produto{

  private $descricao;
  private $preco;

  public function getDetalhes(){

    return "O produto {$this->descricao} custa {$this->preco}";

  }

  public function setDescricao($valor){
    $this->descricao = $valor;
  }


  public function setPreco($valor){
    $this->preco = $valor;

  }

  public function getDescicao($valor){
    return $this->descricao;
  }

  public function getPreco($valor){
    return $this->preco;

  }

}

$p1 = new Produto;
$p1->setDescricao('Livro');
$p1->setPreco(5);

//var_dump($p1);


echo $p1->getDetalhes();



?>
