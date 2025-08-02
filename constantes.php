<?php

define("IVA", 0.18);

$precio = 100;
$total = $precio * (1 + IVA);

echo "total con iva: " . $total;

?>