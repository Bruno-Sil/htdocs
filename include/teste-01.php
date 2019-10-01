<?php

/*function somar($a, $b) {

return $a + $b;


}

function multiplicar($c, $d) {

	return $c * $d;
}
*/



 
$frase = "Bruno é bonito";

$palavra = "bonito";

$q = stripos($frase, 0, $q);

$texto = substr($frase, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);





?>