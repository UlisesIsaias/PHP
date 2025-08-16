<?php

/* For 

$t=7;

for ($i = 1; $i <= 10; $i++) {
    echo $t." x ".$i." = ".$t*$i."<br>";
} */

if(isset($_POST['numero']) && $_POST['numero']!=""){

$t=$_POST['numero']; 
for($i=12; $i >= 1; $i--){
    echo $t." x ".$i." = ".$t*$i."<br>";
};

}else{ 
    echo "no definida";
}
?>
