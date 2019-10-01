<?php

/*require_once("config.php");

echo session_save_path(); // Define o local onde a sessão está sendo armazenada.

echo "<br>";

var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "se as sessões estiverem desabilitadas";
		break;
	case PHP_SESSION_NONE:
	    echo "se as sessões estiverem habilitadas, mas nenhuma existir";
	    break;
	case PHP_SESSION_ACTIVE:
	     echo "se as sessões estiverem habilitadas, e uma existir";
	     break;      
	default:
		echo "Alternativa Inválida";
		break;
}
*/

$json = '[{"Nome":"Bruno","Idade":23}]';


$data = json_decode($json, true);

var_dump($data);


?>