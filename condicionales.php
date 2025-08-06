<?php
/*
$edad = 18;

if($edad >= 18){
    echo "Eres mayor de edad";
}elseif($edad < 1){
    echo "no existes";
}else{

}
*/


/*
$com=120;

if($com>=100):
    $des=$com-($com*0.2);
    echo "su compra tiene descuento y sera de: $".$des;
else:
    echo "su compra es igual :{$com}";
endif;*/


/*
$llan=4;
if($llan<5){
    $tot=800*$llan;
    echo "el precion de sus llantas es :$".$tot;
}elseif($llan>=5){
    $tot=700*$llan;
    echo "sus llantas tienen descunto y pagara :$".$tot;
};
*/



$cal1=790;
$cal2=60;
$cal3=70;

$cali=($cal1+$cal2+$cal3)/3;

if($cali<70){
    echo "no pasaste pa";
}elseif ($cali>=70 && $cali<=89) {
    echo "Pasaste con : ".$cali;
}elseif ($cali<=100) {
    echo " Eres crak";
}else{
    echo "Perry";
};


?>