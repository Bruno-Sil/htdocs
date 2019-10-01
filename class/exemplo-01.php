<?php

class Carro {

	public $cor;
	public $valor;
	public $marca;

    
    public function mostrarCor(){

    	return "A cor do meu carro é<br><br>".$this->cor;
    }


    public function mostrarValor( int ... $valor) {

    	return "<br>O valor do meu carro é<br><br>".$this->valor;
    }

    public function mostrarMarca() {

    	return "<br>A marca do meu carro é<br><br>".$this->marca;
    }
}

$c = new Carro();
$c->cor="Vermlho";
echo $c->mostrarCor();

$v = new Carro();
$v->valor=9000;
echo $v->mostrarValor();

$m = new Carro();
$m->marca="FIAT";
echo $m->mostrarMarca();




?>