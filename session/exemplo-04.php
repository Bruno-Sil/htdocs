
<form>
	<input type="text" name="num1" id="num1">
	<input type="submit" name="btr1" id="btr1" value="PROCURAR">
</form>


<?php

/*session_id('agnk8mjq1ln6ecemo3e9lek46e');

require_once("config.php");
//session_start();
session_regenerate_id();

echo session_id();

var_dump($_SESSION);
*/

$amigos = array("Bruno", "William", "Lucas");

foreach ($amigos as $index => $amigo ) {
	
      echo "Indice: " .$index ."<br>";
      echo "Lista de Amigos: " .$amigo ."<br>";
      echo "<hr>";
}


?>