<?php

$nome = "raphael";
$nivel_acesso = 2;

if ($nivel_acesso == 1){
    echo "acesso basico";
}
else if($nivel_acesso == 2){
    echo "acesso intermedirario";
}

else if($nivel_acesso == 3){
    echo "acesso administrador";
}
else{
    echo "acesso ivalido";
}
?>