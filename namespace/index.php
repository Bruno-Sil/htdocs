<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Bruno");
$cad->setEmail("deltafid@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>