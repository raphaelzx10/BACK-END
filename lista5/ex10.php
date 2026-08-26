<?php

$peso = 60;
$altura = 1.60;
$resultado = $peso/($altura*$altura);



if($resultado >= 19 && $resultado <25){
    echo " peso ideal";
}
else if($resultado >= 25 && $resultado <30){
    echo "sobre peso";
}
else if($resultado >= 30 && $resultado <35){
    echo " obesidade grau '";
}
else if($resultado >= 30 && $resultado <40){
    echo " obesidade grau 2";
}
else if($resultado >=40){
    echo " obesidade grau 3";
} 