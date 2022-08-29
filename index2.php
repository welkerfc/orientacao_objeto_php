<?php

class Conta{
  protected $agencia;
  protected $conta;
  protected $saldo;

  public function __construct($agencia,$conta,$saldo ){

    $this->agencia = $agencia;
    $this->conta = $conta;
    $this->saldo = $saldo;

  }

  public function getDetalhes(){
    return "Agência: {$this->agencia}, Conta: {$this->conta} Saldo: {$this->saldo}<br/>";
  }

  public function Deposito($valor){
    $this->saldo += $valor;
    echo "Deposito de: {$valor} | Saldo Atual {$this->saldo}<br/>";
  }

}

//heranca de classes
final class Poupanca extends Conta{
  public function saque($valor){
    if($this->saldo >= $valor){
      $this->saldo -= $valor;
      echo "Saque de {$valor} | Saldo atual: {$this->saldo}<br/>";
    }else{
      echo "Saque não autorizado | Saldo atual: {$this->saldo}<br/>";
    }
  }
}


final class Corrente extends Conta{
  protected $limite;

  public function __construct($agencia,$conta,$saldo,$limite){
    parent::__construct($agencia,$conta,$saldo);
    $this->limite = $limite;
  }

  public function saque($valor){
    if($this->saldo + $this->limite >= $valor){
      $this->saldo -= $valor;
      echo "Saque de: {$valor} | Saldo Atual {$this->saldo}<br/>";
    }else{
      echo "Saque não autorizado do valor {$valor} | Saldo Atual {$this->saldo} | Limite de {$this->limite}<br/>";
    }
  }

}

$c1 = new Corrente(10,2547,5000,6000);
$c1->Deposito(1800);
$c1->saque(2500);
$c1->saque(6000);
echo $c1->getDetalhes();


 ?>
