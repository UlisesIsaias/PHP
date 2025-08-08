<?php


// Obtener fecha y hora.
date_default_timezone_set("America/Monterrey");

$fecha_us=date("l d f Y");
$fecha_us=date("d/m/Y");


$h_12=date("H:i" );

$fecha_completa=date("d/m/Y - h:i a");
//echo "la fecha completa es ".$fecha_completa;


//  Fecha en español

function fecha_es(){
    $fecha_dia=date("d");
    $fecha_mes=date("m");
    $fecha_year=date("Y");

    $dia_sema = [
    "Monday"    => "lunes",
    "Tuesday"   => "martes",
    "Wednesday" => "miércoles",
    "Thursday"  => "jueves",
    "Friday"    => "viernes",
    "Saturday"  => "sábado",
    "Sunday"    => "domingo"
    ];
};
echo fecha_es();



?>