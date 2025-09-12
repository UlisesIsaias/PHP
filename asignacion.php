<?php
// 🚀 Operadores de asignación compuesta en PHP
// Sirven para aplicar una operación y asignar el resultado en la misma variable.

// Declaramos una variable inicial
$num = 10;

// 🔹 Resta
$num -= 5;   // $num = $num - 5  → $num ahora vale 5

// 🔹 Suma
$num += 5;   // $num = $num + 5  → $num ahora vale 10

// 🔹 División
$num /= 2;   // $num = $num / 2  → $num ahora vale 5

// 🔹 Multiplicación
$num *= 5;   // $num = $num * 5  → $num ahora vale 25

// 🔹 Otra resta
$num -= 4;   // $num = $num - 4  → $num ahora vale 21

// 🔹 Concatenación (para strings)
$texto = "Perry trae el número: ";
$texto .= $num;   // $texto = $texto . $num

// Imprimimos el resultado
echo $texto;
?>
