
<h1>SISTEMA ONLINE DE COMPRAS</h1>

<style>

h1{

	background-color: yellow;
}

</style>

<form>
	<input type="text" name="Nome">
	<input type="date" name="Nascimento">
	<input type="number" name="Valor">
	<input type="submit" value="EFETUAR COMPRA">
</form>

<!-- PayPal Logo --><img  src="https://www.paypal-brasil.com.br/logocenter/util/img/botao-checkout_horizontal_ap.png" border="0" alt="Imagens de solução" height="100 <br>" /><!-- PayPal Logo -->




<?php

if (isset($_GET)) {


foreach ($_GET as $key => $value) {
	
	echo "<br>";
	echo "<br>";
	echo "Nome do Campo: " .$key ."<br>";
	echo "Valor do Campo: " .$value ."<br>";
	echo "<hr>";
}

}



?>