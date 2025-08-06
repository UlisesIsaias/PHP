<?php

// Quiero imprimir los nombres de mis carritos favoritos 😁

$carrosFavoritos = ["Nissan", "Mustang", "Camaro", "BMW", "Ferrari"];

echo "Mis carritos chidos son:\n";

for ($i = 0; $i < count($carrosFavoritos); $i++) {
    echo "Carro " . ($i + 1) . ": " . $carrosFavoritos[$i] . "\n";
}

?>
