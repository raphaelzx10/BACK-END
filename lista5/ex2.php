<?php

$nota1 = 10;
$nota2 = 8;
$frequencia = 75;

$media = ($nota1 + $nota2) / 2;

if($media >= 6 && $frequencia >=75){
    echo "aprovado";
}elseif($media >= 5 && $media <= 7){
    echo "recuperação";
}else{
    echo "reprovado";
}
?>