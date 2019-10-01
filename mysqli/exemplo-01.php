<?php


$conn = new mysqli("localhost", "root", "", "dbphp7");


if ($conn->connect_error) {

	echo "Error: ".$conn->connect_error;
}


$st = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$st->bind_param("ss", $login , $password);

$login = "user";
$password = "12345";

$st->execute();

$login = "root";
$password = "wqxobcfu20";

$st->execute();

?>