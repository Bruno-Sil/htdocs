
<h1>LISTA DE AMIGOS</h1>

<script>
	window.alert('Essa é uma Lista!');
</script>

<form id="amigo">
  <input type="text" name="Nome">
  <input type="submit" value="PROCURAR">
</form>	

<style>
	h1{
		background-color: yellow;
	}

</style>


<?php


$amigos = array("Lucas Jordan", "Lucas Emauel", "William", "Matheus", "Yanka", "Joelves", "Tiago");

foreach ($amigos as $index => $amigo) {
	
    
    echo "Indice: " .$index ."<br><br>";
	echo "Lista de Amigos: " .$amigo ."<br><br>";
	

}


?>