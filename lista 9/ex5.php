<?php

$celulares = [
    "14998123882",
    "14998123883",
    "14998123884",
    "14998123885",
    "14998123886",
];

foreach ($celulares as $numero) {
    echo $numero . "<br>";
}

$quantidade = count($celulares);
echo "Quantidade de telefones: " . $quantidade;

?>