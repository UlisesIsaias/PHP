<?php

// No se pueden modicar ese valor en la ejecucion del progrma p/e  pi, poo

// Las constantes van en MAYUSCULAS 

// inicia con _ o letras 

// la nueva forma es const y nombre de la constante.


const PERRY = "perry";

define("IVA", 0.18);

$precio = 100;
$total = $precio * (1 + IVA);

echo "total con iva: " . $total , PERRY;

?>