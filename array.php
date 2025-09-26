<?php
// pueden llevar array dentro de ellos.
// Arrays escalares array que inicia del 0.

/*
 Modificar el valor o mostrar la sintaxix 
$estudiantes=array("carlos", "uli", "jose", "vannesa");
$estudiantes[1]="Claudia";
*/

//nueva forma 
$estudiantes=["uli","carlos"];

// echo $estudiantes[0];
// array de tipo asociativo

$tutor=[
    "nom"=>"uli",
    "apellido"=>"Isaias",
    "edad"=>"25"
];
$tutor["edad"]=24;
// echo $tutor["edad"];


# Array de multiples dimenciones.
$tutor=[
    "nom"=>"uli",
    "apellido"=>"Isaias",
    "edad"=>"23",
    "cursos"=>["PHP","Python","CSS"]
];
echo $tutor["cursos"][0];


// contar elementos de un array
echo count($estudiantes);

// contar elementos de un array
echo count($estudiantes, COUNT_RECURSIVE);

?>
