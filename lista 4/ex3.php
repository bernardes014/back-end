<?php

$email = "nb@gmail.com";
$senha = "1234";

echo "Bem vindo FACEBOOK <br>";

if($email == "nb@gmail.com" && $senha == "123" && $status == "ativa"){
    echo "Acesso Liberado <br>";
    header("Location: https://www.facebook. com");
}
else{
    echo "email ou senha invalido!";
}