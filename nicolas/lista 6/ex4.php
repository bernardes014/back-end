<?php

$opcao = 3;
echo '<h1 style="color: red"; >NETFLIX</h1>';
echo "1 - Assistir filmes <br>";
echo "2 - Assistir series <br>";
echo "3 - Ver minha lista <br>";
echo "4 - Sair <br>";

switch ($opcao) {
    case 1:
        echo "Voce escolheu: Assistir filmes";
        break;
    case 2:
        echo "Voce escolheu: Assistir series";
        break;
    case 3:
        echo "Abrindo sua lista...";
        break;
}