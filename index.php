<?php
require_once("Pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Jeferson Roberto de Lima");
echo $pessoa->getNome();

?>