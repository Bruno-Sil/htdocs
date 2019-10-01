
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>INTERFACE EM PHP - ORIENTAÇÃO A OBJETOS<h1>

<style>
	h1{
		background-color: yellow;
	}
</style>	

</body>
</html>

<?php

interface Veiculo {

	public function acelerarVeiculo($velocidade);
	public function trocarMarcha($marcha);
	public function reduzirVelocidade($velocidade);
}

abstract class Automovel implements Veiculo {

	public function acelerarVeiculo($velocidade) {

		echo "Acelerei o meu veiculo em<br>".$velocidade."km/h";
	}

	public function trocarMarcha($marcha) {

		echo "Troquei a marcha de numero<br>".$marcha;
	}

	public function reduzirVelocidade($velocidade) {

		echo "Reduzi a velocidade do meu carro em<br>".$velocidade."km/h";
	}
}

class Fiat extends Automovel {


}

$carro = new Fiat();
$carro->acelerarVeiculo(200)."<br>";

echo "<br>=============================<br>";

$carro = new Fiat();
$carro->trocarMarcha(10)."<br>";

echo "<br>================================<br>";

$carro = new Fiat();
$carro->reduzirVelocidade(100)."<br>";
?>


