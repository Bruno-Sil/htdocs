<?php

function __autoload($nomeClass) {

	require_once("$nomeClass.php");

	var_dump($nomeClass);
}

$carro = new DelRey();
$carro->acelerar(100);



?>