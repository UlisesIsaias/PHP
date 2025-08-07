<?php


/* este si tiene en cuanta el tipo de dato no es lo mismo un string que eun tipo de dato.

$a=7;

$u=10;
$x=9;
$p=7;

$result= match($a){
    $u => "Valor igual a u",
    $x => "Valor igula a x",
    7 => "Funcioan igual poniendolo aqui",
    default => "no coincide con nunguna variable",
};
    echo $result;
*/



$edad = 1;

$res = match(true){
    $edad>=60 => "eres de la 3ra edad",
    $edad>=30 && $edad<=60 => "eres un adulto",
    $edad>=18 => "eres un joven",
    default => "Eres un niño",

};
echo $res;

?>