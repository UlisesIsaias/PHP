<?php


// asignacion por referencia el valor de la variable no cambia
$tex="San fe ";

$vari=$tex;

// asignacion por referencia si en la ejecucion tambien cambia el valor de la variable
$vari1=&$tex;

echo $vari1;

$tex="Dongu";

echo $vari1;


?>
