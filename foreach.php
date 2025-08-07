<?php
/*
$laptops = ["HP Pavilion", "Dell XPS", "MacBook Air", "Lenovo ThinkPad", "Acer Aspire", "Asus ZenBook"];

$carros = [
    "Tsuru" => 200,
    "Jetta" => 350,
    "Civic" => 400,
    "Sentra" => 300,
    "Mazda 3" => 450,
    "Corolla" => 420,
];

// para mostrar la clave y el valor de un array dependiendo el uso 
foreach($carros as $clave => $valor){
    echo "carro ".$clave." que cuesta en Dollar*8 ".$valor."<br>";
}
*/



// mostrar solo el valor de una array

$productos = [
    ["nombre" => "Camisa", "precio" => 250, "cantidad" => 10],
    ["nombre" => "Pantalón", "precio" => 450, "cantidad" => 5],
    ["nombre" => "Zapatos", "precio" => 800, "cantidad" => 7],
    ["nombre" => "Gorra", "precio" => 150, "cantidad" => 12]
];

foreach($productos as $valor){
    echo$valor["nombre"]."-".$valor["precio"]."<br>";
}

?>