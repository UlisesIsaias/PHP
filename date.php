<?php
// Zona horaria
date_default_timezone_set("America/Monterrey");

// Función para fecha completa en español
function fecha_es() {

    
    // Arrays de traducción
    $dia_semana = [
        "Monday"    => "lunes",
        "Tuesday"   => "martes",
        "Wednesday" => "miércoles",
        "Thursday"  => "jueves",
        "Friday"    => "viernes",
        "Saturday"  => "sábado",
        "Sunday"    => "domingo"
    ];

    $mes_year = [
        "January"   => "enero",
        "February"  => "febrero",
        "March"     => "marzo",
        "April"     => "abril",
        "May"       => "mayo",
        "June"      => "junio",
        "July"      => "julio",
        "August"    => "agosto",
        "September" => "septiembre",
        "October"   => "octubre",
        "November"  => "noviembre",
        "December"  => "diciembre"
    ];

    // Obtener valores en inglés
    $dia_ing = date("l");
    $mes_ing = date("F");
    $dia_num = date("d");
    $anio    = date("Y");
    $hora    = date("h:i a");

    // Construir fecha en español
    $fecha_es = $dia_semana[$dia_ing] . " " . $dia_num . " de " . $mes_year[$mes_ing] . " de " . $anio . " - " . $hora;

    return $fecha_es;
}

// Ejemplo de uso
echo fecha_es();
?>
