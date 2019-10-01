<?php

use Cliente\Cadastro;

require_once("config.php");

$cad = new Cadastro();
$cad->setNome("Bruno");
$cad->setEmail("deltafid@gmail.com");
$cad->setSenha("br12345678");


$cad->registrarVenda();



?>