<?php

//$resultado = (10 + 3) / 2 > 5 || 10+5 < 3; // Todas as condicoes tem que esta corretas para o valor ser verdadeiro


//var_dump($resultado);



$a = 1;
$b = NULL;
$c = 20;

echo $a ?? $b ?? $c;


?>