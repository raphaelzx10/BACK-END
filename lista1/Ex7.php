<?php

$nome_completo = "Hyoyeon";
$senha = 5689;
$confirma_senha = 5789;
$idade = 17;
$cont = 0;

if($nome_completo != " "){
    echo "Nome correto";
    $cont += 1;
}
else{
    echo "Coloque o seu nome!";
}
echo "<br>";
if($senha == $confirma_senha){
    echo "Senha correta";
    $cont += 1;
}
else{
    echo "Senha incorreta";
}
echo "<br>";
if($idade >= 18){
    echo "Idade adequada!";
    $cont += 1;
}
else{
    echo "Idade inadequada, espere mais alguns anos para acessar!";
}
echo "<br>";
echo "<br>";


if($cont == 3){
    echo "Acesso liberado!" , "<br>" , "Nome: " , $nome_completo , "<br>" , "Senha: " , $senha , "<br>" , "Idade: " , $idade;
}
else{
    echo "Acesso negado, os dados estão incorretos";
}

?>
