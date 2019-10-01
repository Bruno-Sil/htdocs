<?php


function soma(int ... $valores){

 return array_sum($valores);

}


echo soma(2, 2);
echo "<br>";
echo soma(100, 100);
echo "<br>";
echo soma(19.6, 19.6);

?>