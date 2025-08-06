<?php

// Lista de mis carritos favoritos 😎
$carrosFavoritos = ["Nissan", "Mustang", "Camaro", "BMW", "Ferrari"];

echo "🚗 Mis carritos favoritos son:\n\n";

foreach ($carrosFavoritos as $indice => $carro) {
    echo "Carro #" . ($indice + 1) . ": " . $carro . "\n";
}

?>
