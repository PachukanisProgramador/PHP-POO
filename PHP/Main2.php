<?php
require_once ("Pessoa.php");
require_once ("Cliente.php");
require_once ("Funcionario.php");
require_once ("Conta.php");

$enderec = new Endereco("Avenida Oi","400","Senac","Centro","São Bernardo do Campo","São Paulo","Brasil","01111000","SP");
$client = new Cliente("12345678910", "Thiago", "11968161630",$enderec,20);
$conta = new Conta($client,200);

?>