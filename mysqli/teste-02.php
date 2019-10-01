<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");


if ($conn->connect_error) {

	echo "Error: ".$conn->connect_error;
}

$resultado = $conn->query("SELECT * FROM tb_clientes ORDER BY idusuario");

$data = array();

while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {

	array_push($data, $row);
}

echo json_encode($data);

?>