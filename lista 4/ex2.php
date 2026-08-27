<?php

$ingresso = "nao";
$cortesia = "sim";

echo "bem vindo ao camarote da FAPI 🐎 <br>";

if($ingresso == "sim" || $cortesia == "sim"){
    echo "Pode entrar e curtir a night!";
}
else{
    echo "Sem ingresso ou cortesia";
}