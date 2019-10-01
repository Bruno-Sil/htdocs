<?php 

/*echo "<select>";


for ($i=date("Y"); $i > date("Y")-100 ; $i--) { 

	echo '<option value="'.$i.'">'.$i.'</option>';
	
}
*/

//echo "</select>";


echo "<select>";

for ($contador=date("Y"); $contador >date("Y")-200 ; $contador--) { 

	echo '<option value="'.$contador.'">'.$contador.'</option>';
	
}

echo "</select>";

?>