
<?php 

abstract class Animal {

	public function falar() {

       return "Som";
	}

	public function mover() {

		return "Anda";
	}
}

class Cachorro extends Animal {

	public function falar(){

		return "Latir";
	}
}

class Gato extends Animal {

	public function falar() {

		return "Miar";
	}
}

class Passaro extends Animal {

	public function falar() {

		return "Assobiar";
	}

	public function mover() {

		return "Voa e<br>".parent::mover();
	}
}

$bidu = new Cachorro();


echo $bidu->falar()."<br>";
echo $bidu->mover()."<br>";

echo "=============<br>";

$nani = new Gato();

echo $nani->falar()."<br/>";

echo "===============<br>";

$p = new Passaro();
echo $p->falar()."<br/>";
echo $p->mover()."<br/>";

?>