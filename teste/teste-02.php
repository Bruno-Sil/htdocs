<?php

$vet[0]=$_POST['num1'];
$vet[1]=$_POST['num2'];
$vet[2]=$_POST['num3'];
$vet[3]=$_POST['num4'];
$vet[4]=$_POST['num5'];
$vet[5]=$_POST['num6'];
$vet[6]=$_POST['num7'];
$vet[7]=$_POST['num8'];
$vet[8]=$_POST['num9'];
$vet[9]=$_POST['num10'];


bubbleSort($vet);

function bubbleSort($vetor) {

  for ($cont1=0; $cont1 <10; $cont1++) { 
  
      for ($cont2=0; $cont2 <9; $cont2++) { 
      	
      	if ($vetor[$cont2+1]<=[$cont2+1]) {

      		$aux=$vetor[$cont2];
      		$vetor[$cont2]=$vetor[$cont2+1];
      		$vetor[$cont2+1]=$aux;

      	}
      }

      $lista[$cont1]=$aux;
  }

  echo "<h1> Lista Ordenada em Ordem Crescente<h1>";
  for ($n=0; $n <10; $n++) { 
  	
  	echo '<td><h3>Numero '.$n. '= ' .$vetor[$n]. '</h3></td>';
  }
}


function bubbleSort2($vetor) {

  for ($cont1=0; $cont1 <10; $cont1--) { 
  
      for ($cont2=0; $cont2 <9; $cont2--) { 
      	
      	if ($vetor[$cont2-1]<=[$cont2-1]) {

      		$aux=$vetor[$cont2];
      		$vetor[$cont2]=$vetor[$cont2-1];
      		$vetor[$cont2-1]=$aux;

      	}
      }

      $lista[$cont1]=$aux;
  }

  echo "<h1> Lista Ordenada em Ordem Decrescente<h1>";
  for ($n=0; $n <10; $n--) { 
  	
  	echo '<td><h3>Numero '.$n. '= ' .$vetor[$n]. '</h3></td>';
  }
}




?>