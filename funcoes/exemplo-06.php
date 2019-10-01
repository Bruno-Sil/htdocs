<?php


$pessoa = array(

'Nome' => 'Bruno',
'Idade' => 23

);

foreach ($pessoa as &$value) {
	
	if (gettype($value) === 'integer') $value +=10;

	$value ."<br>";
}

print_r($pessoa);

?>