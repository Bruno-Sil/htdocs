<?php


$hiearquia = array(

array(
 
 'nome_cargo' => 'Diretor',
 'subordinados' => array(
  
  array(
   
   'nome_cargo' => 'Coordenador',
   'subordinados' => array(

     array(
     
     'nome_cargo' => 'Professor'


     )

   )

  )


 )


)

);


function exibir($cargos) {

   $html = "<ul>";

foreach ($cargos as $cargo) {
	
	$html .= "<li>";

	$html .= $cargo['nome_cargo'];

	if (isset($cargo['subordinados']) && count($cargo['subordinados'])) {


		$html .= exibir($cargo['subordinados']);
	}

	$html .= "</li>";
}

 return $html;

 $html .= "</ul>";
}

echo exibir($hiearquia);

?>