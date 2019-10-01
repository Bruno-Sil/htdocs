<?php

$a = 10;

function trocarValor(&$a) {
   

    $a += 50;

    return $a;

}

echo trocarValor($a);

echo "<br>";

echo trocarValor($a);

echo "<br>";

echo ($a);

?>