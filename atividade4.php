    <?php


$nomes = array("Matheus", "Marcela", "Pavarotti", "Gessinger", "Donatelo");

echo "<h3>Lista de nomes na ordem digitada:</h3>";

foreach ($nomes as $nome) {
    echo $nome . "<br>";
}

echo "<h3>Lista de nomes na ordem inversa:</h3>";

$total = count($nomes);

for ($i = $total - 1; $i >= 0; $i--) {
    echo $nomes[$i] . "<br>";
}

?>