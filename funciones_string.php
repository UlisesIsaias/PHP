<?php

/*
$c_tex="aaahhhola Mundo";

convertir las letras a minuscula
$c_tex=strtolower($c_tex);

// convertir las letras a mayuscula
//$c_tex=strtoupper($c_tex);

// convertir las primeras letras a minuscula
$c_tex=ucfirst($c_tex);
$c_tex=ucwords($c_tex);   */


// funcion contar los caracteres 
$c_tex="aaahhhola Mundo";

$long=strlen($c_tex);
echo $c_tex."tiene :".$long. "caracteres <br>";


$palabras=str_word_count($c_tex);
echo $c_tex."tiene :".$palabras. "palabras";


?>