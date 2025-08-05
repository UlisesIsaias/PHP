<?php

$nom="ulises";
$pais="Mexco";
$num=21;

$resultado = $nom.$pais.$num;
//echo $resultado;  

// Concatenacion de variables 
echo "<br> Mi nombre es Perry ".$nom." Soy de ".$pais."Y uso el ".$num;

// Interpolacion de variables | no se puede hacer con variables de comilla simple 'nom'
echo "<br> Mi nombre es $nom y soy de $pais";

// Interpolacion de variables con llaves 
echo "<br> Mi nombre es {$nom} y soy de {$pais}";


?>
