<?php

// Es considerado un if pero en una sola linea 

/*(9>11) ? $tot = 10*10 : $tot= 10*5;
echo $tot;

$tot = (9>1) ? 10*10 : 10*5;
echo $tot       */



/* Hacer que calcule el total a pagar por la compra de camisas si se compran 3 camisas o mas 
se aplica descuento del 20 % sobre el total de la compra y si son menos de 3 un descuento de 10%

$camisas=2;
$precio=10;
$tot=$camisas*$precio;

$tot = ($camisas>=3) ? $tot-($tot*0.20) : $tot-($tot*0.10);
echo "su total a pagar es de :$". $tot;
*/

// Si un cliente compra 5 boletos o más, se le aplica un 30% de descuento sobre el total.
// Si compra menos de 5, recibe un 15% de descuento.
// El precio por boleto es de $50.

$boleto=5;
$precio=50;
$tot=$boleto*$precio;

$tot = ($boleto>=5) ? $tot-($tot*0.30) : $tot-($tot*0.15);

echo "El boleto te cuesta :".$tot;




?>