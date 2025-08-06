<?php

/* Escribir el nombre del los dias de la semana en funcion al valor de la variable dia.
$dia=5;

if($dia==1){
    echo "lunes";
}elseif ($dia==2) {
    echo "martes";
}elseif($dia==3) {
    echo "miercoles";
}elseif($dia==4){
    echo "jueves";
}elseif($dia==5){
    echo "viernes";
}elseif ($dia==6) {
    echo "sabado";
}elseif($dia==7) {
    echo "domindo";
}else{
    echo "dia invalido";
};      */


// Descuento a clinetes dependiendo el numero de computadoros que compren sin son menores de 5 descuento del 10%
// si son mas de >=5 && <=10 descuento de 20% si son 10 o + se les da un 40% de descuento.

$compu=3;
$precio=700;
$tot=$compu*700;

if($compu<5){
    $tot=$tot-($tot*.1);
    echo "Tines un descuento de 10% y pagaras:".$tot;
}else if($compu>=5 && $compu<10){
    $tot=$tot-($tot*.2);
    echo "Tienes un descuento del 20% y pagaras :{$tot}";
}else if($compu>=10){
    $tot=$tot-($tot*.4);
    echo "Tienes un descuento del 40% y pagaras:".$tot;
}else{
    echo "perry";
}

?>