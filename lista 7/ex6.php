<?php


function calcularMedia($nota1, $nota2, $nota3) {
    $soma = $nota1 + $nota2 + $nota3;
    $media = $soma / 3;
    return "A média do aluno é: $media";
}

echo calcularMedia(8, 6, 7);
