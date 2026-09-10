<?php

$seguidores = ["vict0r.gabriel_", "faelqyy", "larabarbi_"];
$soma = 0;

foreach($seguidores as $pessoas){
    echo $pessoas . "<br>";
    $soma = $soma + 1;
}

echo "A primeira pessoa da lista é: " . $seguidores[0];

?>