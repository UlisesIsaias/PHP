<?php

$dia = "martes";

switch ($dia) {
    case "lunes":
        echo "Hoy es lunes. ¡Ánimo!";
        break;
    case "martes":
        echo "Hoy es martes. Vamos avanzando.";
        break;
    case "miércoles":
        echo "Mitad de semana.";
        break;
    case "jueves":
        echo "Ya casi es viernes.";
        break;
    case "viernes":
        echo "¡Es viernes!";
        break;
    default:
        echo "Es fin de semana o ingresaste un día no válido.";
        break;
}

?>