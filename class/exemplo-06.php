<?php

class Documento {

	private $numero;

	public function getNumero() {

		return $this->numero;
	}

	public function setNumero($numero) {

		$this->numero = $numero;
	}
}

class Cpf extends Documento {

	public function validar():bool {

		$numeroCpf = $this->getNumero();

		return true;
	}
}

$c = new Cpf();
$c->setNumero("61212272307");

var_dump($c->validar());

echo "<br>";

echo $c->getNumero();



?>