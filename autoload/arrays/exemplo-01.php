



<?php

/*$motos[0][0] = "Honda";
$motos[0][1] = "YAMAHA";
$motos[0][2] = "KS";

$motos[1][0] = "Titan";
$motos[1][1] = "YBR";
$motos[1][2] = "Kross";

echo $motos[0][0];

echo end($motos[1]);
*/


/*$amigos = array();

array_push($amigos, array(

'Nome' => 'Bruno',
'Idade' => 23,

));

print_r($amigos);
*/

$condicao = true;

while ($condicao) {
	
	$numero = rand(1, 10);
	if ($numero === 100) {

		echo "Quinhentos";
		$condicao = false;
	}

	$numero ." ";
}



?>