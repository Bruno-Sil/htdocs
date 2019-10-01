	<html>

	<head>
	<meta charset="utf-8">
	</head>

	<body>

	<style> 

	body {
	background-color: blue;
	background-position: center;
	


	}

	</style>

	</body>	
	<form>	

	<input type="text" name="none">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">


	</form>
	</html>



	<?php
     
     if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
    	
    	echo "Nome do campo: " .$key  . "<br>";
    	echo "Valor do campo: " .$value . "<br>";
    	echo "<hr>";
    }

    }
    
	?>