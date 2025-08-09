<?php

// Encriptar claves con md5 y hash  este ejemplo es para un inicio desession

$v="uli123";

$cp=password_hash($v,PASSWORD_BCRYPT,["cost"=>"10"]);

$c2="12345";

if (password_verify($c2,$cp)){
    echo "las claves coinciden";
}else{
    echo "las claves no coinciden";
}



//echo hash("md5",$v)."<br>";

//foreach(hash_algos() as $algoritmos){
//    echo $algoritmos." - ".hash($algoritmos,$v)."<br>"; }



// hash diferentes cada actualizacion check documentation dependiendo las necesidades
//echo password_hash($v,PASSWORD_DEFAULT,["cost"=>"10"]);
?>