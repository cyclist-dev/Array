<?php
$notas=[];
$notas[0]=0.5;
$notas[1]=1.5;
$notas[2]=2.5;
$notas[3]=3.5;
$notas[4]=4.5;

$maior = $notas[0]; 
for($i=0; $i<5; $i++){
    if($notas[$i] > $maior){
        $maior = $notas[$i];
    }
}
?>