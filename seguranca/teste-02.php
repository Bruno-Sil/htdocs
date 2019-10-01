<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;

/*if (!is_numeric($id) || strlen($id > 4)) {

	exit ("Pegamos Você");
}

$conn = new mysqli("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

	$resultado->nomeusuario."<br>";
}
*/

$pessoa = array(

'Nome'=> 'Bruno',
'Idade'=> 23,
'Sexo'=> 'Masculino',
'Apelido'=> 'Brunão',
'Profissão'=> 'Desenvolvedor PHP'

);

foreach ($pessoa as &$value) {
	
	if (gettype($value) === 'integer')$value+=10;

	$value."<br>";
}

print_r($pessoa);

?>