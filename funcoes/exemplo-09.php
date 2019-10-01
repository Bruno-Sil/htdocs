<?php

$hierarquia = array(

 array(
 
 'nome_cargo' => 'Pastor',
 'subordinados' => array(

  array(
  
  'nome_cargo' => 'Evangelista',
  'subordinados' => array(

    array(

    'nome_cargo' => 'Presbitero'


    )

  )


  ),

  array(

   'nome_cargo' => 'Diacono',
   'subordinados' => array(
    
    array(
     
     'nome_cargo' => 'Cooperador',
     'subordinados' => array(
      
      array(
       
       'nome_cargo' => 'Membro'

      )

     )

    )

   )

  )


 )


 )


);

function exibir($cargos) {

$html = "<ul>";

foreach ($cargos as $cargo) {

   $html .="<li>";

   $html .=$cargo['nome_cargo'];

   if (isset($cargo['subordinados']) && count($cargo['subordinados'])) {
       
       $html .= exibir($cargo['subordinados']);
   


   }

     $html .="</li>";
	
}

return $html;

$html .="</ul>";

}

echo exibir($hierarquia);


?>