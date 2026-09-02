<?php

function calculadoraDesconto($preco, $desconto){
    $valorDesconto = $preco * $desconto / 100;
    return $preco - $valorDesconto;

}
echo "preço final: R$ ", calculadoraDesconto (100, 10);
?>