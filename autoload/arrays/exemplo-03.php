<?php


$linguagens = array();

array_push($linguagens, array( // O método push adiciona elementos ou valores no array.

'Nome' => 'Java',
'Fabricante' => 'Sun MicroSystens',

));

array_push($linguagens, array(

'Nome' => 'PHP',
'Fabricante' => 'Rasmus Lerdof',

));

array_push($linguagens, array(

'Nome' => 'C++',
'Fabricante' => 'JBarne',

));

array_push($linguagens, array(

'Nome' => 'Lua',
'Fabricante' => 'UFRJ',

));


echo json_encode($linguagens);

?>