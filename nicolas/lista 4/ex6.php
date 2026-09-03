<?php

$idadeCliente = 65;
$possuiDeficiencia = "não";
$gestante = "não";

if ($idadeCliente >= 60 || $possuiDeficiencia == true || $gestante == true) {
    echo "Atendimento prioritário";
} else {
    echo "Atendimento normal";
}

?> 

