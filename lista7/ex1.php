<?php

function verificarIdade($idade){
    if($idade < 16){
        return "   Não pode votar";
    }
    elseif($idade < 18){
        return "voto opcional";
    }
    else{
        return " voto obrigatorio";
    }

}
echo verificarIdade(20);
?>