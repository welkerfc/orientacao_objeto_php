<?php
require "vendor/autoload.php";

if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){

  die("cadastrar");

}

include "includes/header.php";
include "includes/formulario.php";
include "includes/footer.php";


?>
