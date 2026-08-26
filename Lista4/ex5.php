<?php

echo  "bem vindo a RG bet<br>";
echo  "acerte o numero de 0 a 20 e ganhe o triplo <br>";

$aposta = 10;
$numero_escolhido = 5;

if($numero_escolhido == $numero_escolhido+1){
    echo "voce ganhou ", $aposta*3;
}
else{
    echo " Quase la.... Seu numero: $numero_escolhido <br>";
    echo "numero sorteado:", $numero_escolhido + 1;
}
?>