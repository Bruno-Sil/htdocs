<?php

/*function aumentarSalario() {

   return 980.00;


}

echo "Bruno teve seu salário aumentado três vezes<br>" .aumentarSalario()*3;
*/

session_start();

echo session_save_path();

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


?>