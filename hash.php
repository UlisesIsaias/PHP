<?php

// Encriptar claves con md5 y hash 

$v="uli123";
//echo hash("md5",$v)."<br>";

//foreach(hash_algos() as $algoritmos){
//    echo $algoritmos." - ".hash($algoritmos,$v)."<br>"; }



// hash diferentes cada actualizacion check documentation dependiendo las necesidades
echo password_hash($v,PASSWORD_DEFAULT,["cost"=>"10"]);
?>