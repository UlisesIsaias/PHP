<?php

$precio = 5;
$precio1 = 2;

$total = $precio + $precio1;
$resta = $precio - $precio1;
$mult = $precio * $precio1;
$div = $precio / $precio1;

$operac=7-4+($precio*$precio1)/$precio1;
echo "<br>";

echo "El resultado de la gerarquia es : ".$operac;

/*
Gerarquia de operadores aritmeticos

1 ()
2 exponentes
3 multiplicacion y divicion
4 suma y resta
5 modulo, diviciones enteras 
*/

echo "<br>Total de la suma es :  $total";
echo "<br>Toltal de la resta es: $resta";
echo "<br>Toltal de la multiplicaicon es: $mult";
echo "<br>Toltal de la divicion es: $div";


// sacar el modulo si sobra o no sobra
$rep = 10;
$grip= 2;
$sobr = $rep % $grip;
echo "<br>sobrante $sobr ";


// Exponente 
echo "<br>";

$cuadrado = 5 ** 2;

echo "Cinco al cuadrado es: $cuadrado";

echo "<br>";

?>