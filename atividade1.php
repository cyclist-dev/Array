<?php
$notas=[];
$notas[0]=0.5;
$notas[1]=1.5;
$notas[2]=2.5;
$notas[3]=3.5;
$notas[4]=4.5;
$notas[5]=5.5;
$notas[6]=6.5;
$notas[7]=7.5;
$notas[8]=8.5;
$notas[9]=9.5;


echo $notas[0]."<br>";
echo $notas[1]."<br>";
echo $notas[2]."<br>";
echo $notas[3]."<br>";
echo $notas[4]."<br>";
echo $notas[5]."<br>";
echo $notas[6]."<br>";
echo $notas[7]."<br>";
echo $notas[8]."<br>";
echo $notas[9]."<br>";



$total = $notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] +
 $notas[5] + $notas[6]  + $notas[7] + $notas[8] + $notas[9];
echo "Total de notas: ".$total."<br>";
$media = $total/10;
echo "Média das notas: ".$media."<br>"
?>