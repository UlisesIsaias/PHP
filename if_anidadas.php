<?php

//Pedir al ususario la edad y el genero para que la copmu indique si ya puede jubilarse hombre se jubila a lo 60
// y la mujer se jubila a si tiene 54 o mas 
$edad=89;
$gen="hombre";

if ($edad < 1) {
    echo "Ingresa una edad válida.";
} elseif ($gen == "mujer") {
    if ($edad >= 54) {
        echo "Ya puedes jubilarte.";
    } else {
        echo "Aún no puedes jubilarte.";
    }
} elseif ($gen == "hombre") {
    if ($edad >= 60) {
        echo "Ya puedes jubilarte.";
    } else {
        echo "Aún no puedes jubilarte.";
    }
} else {
    echo "Género no válido.";
}


?>