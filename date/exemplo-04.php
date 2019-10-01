<?php


//$dt = new DateTime();

//echo $dt->format("l, d/m/Y H:i:s");

$hierarquia = array(

array(

'nome_cargo' => 'Diretor',
'subordinados' => array(

 array(
  
 'nome_cargo' => 'Diretor-Adjunto',
 'subordinados' => array(

   array(

   'nome_cargo' => 'Coordenador'

   )

 )


 )

)


)


);

function exibir($cargos) {

   $html = "<ul>";

   foreach ($cargos as $cargo) {
   	
   	   $html.="<li>";

   	   $html.=$cargo['nome_cargo'];

   	   if (isset($cargo['subordinados']) && count($cargo['subordinados'])){


   	   	   $html.=exibir($cargo['subordinados']);
   	   }

   	   $html.="</li>";
   }

   $html.="</ul>";

   return $html;

}

echo exibir($hierarquia);

?>