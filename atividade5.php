<?php


$numeros = array(10, 25, 30, 45, 50, 60, 70);

$encontrado = false;

for ($i = 0; $i < count($numeros); $i++) {
        
    if ($numeros[$i] == 30) {
        echo "O número 30 foi encontrado na posição: " . $i;
        $encontrado = true;
        break;
    }
}

if ($encontrado == false) {
    echo "O número 30 não foi encontrado no array.";
}

?>