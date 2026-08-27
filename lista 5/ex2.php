<?php

$nota1 = 7;
$nota2 = 8;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) /3;

echo "Média: " . $media . "<br>";

if ($media > 6) {
    echo "Aluno aprovado";
} else {
    echo "Aluno reprovado";
}

?>