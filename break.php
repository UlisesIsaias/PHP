<?php
/*
$c=1;

while($c<=20){
    echo $c."<br>";
    if($c==10){
        break;
    }
    $c++;
}


$laptops = ["HP", "Dell", "MacBook", "Lenovo", "Acer", "Asus"];

foreach($laptops as $valor){
    if($valor=="Lenovo"){
        // Se detiene la ejecucion;
        //break
        //sige solo lo omite
        continue;
    }
    echo $valor."<br>"; 
}  */

for($i=1; $i<=10; $i++){
    if($i==6){
        continue;
    }
    echo $i."<br>";
}


?>