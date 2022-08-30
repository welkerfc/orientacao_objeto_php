<?php
require "vendor/autoload.php";

use \App\Entity\Vaga;


if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){

$obVaga = new Vaga;
$obVaga->titulo = $_POST['titulo'];
$obVaga->descricao = $_POST['descricao'];
$obVaga->ativo = $_POST['ativo'];
$obVaga->cadastrar();


}

include "includes/header.php";
include "includes/formulario.php";
include "includes/footer.php";


?>
