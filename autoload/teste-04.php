<?php

function incluirClasses($nomeClass) {

	if (file_exists($nomeClass.".php") === true) {

		require_once($nomeClass.".php");
	}
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClass) {

 if(file_exists("abstratas".DIRECTORY_SEPARATOR.$nomeClass.".php") === true)

 	require_once("abstratas".DIRECTORY_SEPARATOR.$nomeClass.".php");

});

$carro = new DelRey();
$carro->acelerar(100);

?>
