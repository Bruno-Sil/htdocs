
<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {

	echo "Error: ".$conn->connect_error;

} else {

	echo "Conexão Bem Sucedida!!!";
}

$st = $conn->prepare("INSERT INTO tb_usuarios (dessenha, deslogin) VALUES (?, ?)");

$st->bind_param("ss", $pass, $log);

$pass = "789";
$log = "bruno@1234";

$st->execute();


?>