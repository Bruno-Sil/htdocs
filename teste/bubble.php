<?php

$vet[0]=$_POST['num1']; // O método Post recebe os dados que são postados via formulários.
$vet[1]=$_POST['num2'];
$vet[2]=$_POST['num3'];
$vet[3]=$_POST['num4'];
$vet[4]=$_POST['num5'];


// chmando o método bubble sort
bubbleSort($vet);

// A função é chamada passando o vetor como parãmetro
function bubbleSort($vetor) {
    
    // O primeiro laço fica responsavel por percorrer todos os elementos do vetor
   for ($cont1=0; $cont1 <5; $cont1++) { 
   	   
   	   // Dentro deste laço é feita as comparações
       for ($cont2=0; $cont2 <4; $cont2++) { 
        
       	if ($vetor[$cont2+1]<=[$cont2+1]) {
        // É utilizada uma variavel auxiliar para a troca do valor
       		$aux=$vetor[$cont2];
       		$vetor[$cont2]=$vetor[$cont2+1];
       		$vetor[$cont2+1]=$aux;
           
       	  
       }

       	}

       	// Um novo vetor recebe os valores ordenados
         $lista[$cont1]=$aux;
   }

   // Exibe o vetor ordenado
   echo "<h1>Lista Oredenada em Ordem Crescente</h1>";
     for ($n=0; $n<5; $n++) {

     	echo '<td><h3>Numero '.$n. '= ' .$vetor[$n]. '</h3></td>';
     }
}



?>

<style>
	h1{
		background-color: yellow;
	}

</style>