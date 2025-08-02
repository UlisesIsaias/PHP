<?php

$precio = 50;
$precio1 = 50;

$total = $precio + $precio1;
$resta = $precio - $precio1;
$mult = $precio * $precio1;
$div = $precio / $precio1;


echo "<br>Total de la suma es :  $total";
echo "<br>Toltal de la resta es: $resta";
echo "<br>Toltal de la multiplicaicon es: $mult";
echo "<br>Toltal de la divicion es: $div";


// sacar el modulo si sobra o no sobra
$rep = 10;
$grip= 3;
$sobr = $rep % $grip;
echo "<br>sobrante $sobr ";


// Exponente
echo "<br>";

$cuadrado = 5 ** 2;

echo "Cinco al cuadrado es: $cuadrado";



echo "<br>";

if ( $mult > 2000){
    echo " es mas que dosmil";  
}else{
    echo "Es menos de dosmil";
}


?>