
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <h1>ACESSANDO O BANCO DE DADOS COM PDO - PHP</h1>
    
    <style>
    	h1{
    		background-color: yellow;
    	}
    </style>

</body>
</html>

<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");


$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row ) {

	foreach ($row as $key => $value) {
	    
	    echo "<strong>".$key."</strong>".$value."<br>";
	}

	echo "=============================================<br>";
	
}



?>