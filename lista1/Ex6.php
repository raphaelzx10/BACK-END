<?php

$valor_pedido = 50;
$valor_minimo_entrega = 40;
$idade_cliente = 19;
$idade_minima_bebida_alcoolica = 18;
$estoque = 500;
$quantidade_pedida = 2;
$status_pedido = "Pago";

if($valor_pedido >= $valor_minimo_entrega){
    echo "Entrega é grátis!";
}
else{
    echo "A taxa é de R$ 5,90";
}
echo "<br>";
if($idade_cliente >= $idade_minima_bebida_alcoolica){
    echo "Bebida alcoólica de valores até R$ 15,00";
}
else{
    echo "Bebida alcoólica";
}
echo "<br>";
if($quantidade_pedida <= $estoque){
    echo "Pedido aceito!";
}
else{
    echo "Pedido negado! Motivo: Falta de estoque";
}
echo "<br>";
if($status_pedido == "Pago"){
    echo "Pedido liberado para produção";
}
else{
    echo "Esperando pagamento! Valor: R$ 115,00";
}
echo "<br>";
echo "<br>"
?>