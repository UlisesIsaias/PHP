<?php

$not = 18;

if($not >= 18){
    echo "Eres brillante";
} elseif($not >= 14){
    echo "Eres moroles";
} elseif($not >= 10){
    echo "aprovado";
} else{
    echo "no aprobado";
}


echo "<br>";

$edad = 20;
$tien_lin = false;

if($edad >= 18){
    if($tien_lin){
        echo "puedes conducir";
    }else{
        echo "Necesitas una licenca de conducior";
    }
}else {
    echo " no puedes la suficiente edad no puedes conducir";
}





?>