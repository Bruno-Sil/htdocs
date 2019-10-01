<?php


$nome = "Hcode";
$site = 'www.sitedobrunosantos.com';
$ano = 1996;
$salario = 1500.50;
$bloqueado = false;
///////////////////////////////////////// tipos básicos


///////////////////////// Arrays e Objetos

$frutas = array("abacaxi","laranja","manga","tangerina");

//  echo $frutas[3];

$nascimento = new DateTime();

//var_dump($nascimento);

/////////////////////////// Especiais 

$arquivo = fopen("exemplo-02.php", "r");

var_dump($arquivo);

//$nulo = NULL;



?>