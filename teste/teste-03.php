
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5475.259185115955!2d-41.80757447544925!3d-2.8445342252340358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-BR!2sbr!4v1565754409969!5m2!1spt-BR!2sbr" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

<br>
<br>

<style>

body{

	background-color: yellow;
}

</style>

<form>
	<label>
	<input type="text" name="none">
</label>
   <input type="submit" value="PROCURAR">
</form>

<?php

$_POST = array("Ilha Grande, 75km", "Parnaiba 25km", "Luís Correia 45km", "Piripiri 50km", "Cajueiro da Praia 35km");

foreach ($_POST as $key => $value) {
	
	echo "Nome do campo: " .$key ."<br>";
	echo "Valor do campo: " .$value ."<br>";
}



?>