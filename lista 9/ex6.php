<?php

$musicas = [
    "Puxa o Lança",
    "A meu Favor",
    "Luxuria",
    "Artista Genérico",
    "Mds",
    "Sal e Pimenta",
];

   foreach ($musicas as $musica) {
    echo $musica . "<br>";
}

$quantidade = count($musicas);
echo "Quantidade de músicas: " . $quantidade;
?> 