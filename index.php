<?php
// Methodo get envia todo por la url se ven pero se utilizan en el mvc y en las apis
// Methodo _POST No se ven en la url
$materias=$_POST['materia'];
foreach($materias as $materias){
    echo $materias."<br>";

}
echo "<br>";
echo "<br>";
echo "<br>";


$fruta=$_POST['f'];
foreach($fruta as $fa){
    echo $fa."<br>";
}




?>