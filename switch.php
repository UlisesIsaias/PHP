<?php

//Mostrar la fruta que sea o si no es una fruta.

$fruta="fresa";

switch($fruta){
    case "fresa";
        echo "eres una fresa";
        break;
    case "manzana";
        echo " eres una manzana";
        break;
    case "pera";
        echo " Eres una pera";
        break;
    default:
    echo "no eres una fruta";
}



// Los dias de la semana 

$dia=7;

switch($dia){
    case "1":
        echo "lunes";
        break;
    case "2":
        echo " martes";
        break;
    case "3";
        echo "Miercoles";
        break;
    case "4";
        echo "jueves";
        break;
    case "5";
        echo "Viernes";
        break;
    case "6";
        echo "Sabado";
        break;
    case "7" :
        echo "Domingo";
        break;
    default:
    echo "no eres una dia";
} 


?>