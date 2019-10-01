<?php 

$meuSalario = 1500;
$salarioSonhado = 5000;
$salarioMinimo = 980;



echo "<h1>ESTRUTURAS DE CONTROLE E LAÇOS DE REPETIÇÃO</h1><br>";

if ($meuSalario < $salarioSonhado) {

	echo "Objetivo não atingido";

} else if ($meuSalario < $salarioMinimo) {

	echo "Fracassei...";

} else if ($salarioSonhado > $salarioMinimo) {

	echo "Alcançei meu Objetivo";

} else {

	echo "Mudança de Planos";
}

echo "<br>";


echo ($meuSalario > $salarioMinimo)?"Objetivo atingido":"Fracassei";

?>