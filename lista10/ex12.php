<?php

// Cria a rede neural
$ann = fann_create_standard(3, 2, 3, 1);

// Define a função de parada como MSE
fann_set_train_stop_function($ann, FANN_STOPFUNC_MSE);

// Define o erro desejado
fann_set_bit_fail_limit($ann, 0.01);

// Verifica qual função de parada está configurada
$funcao = fann_get_train_stop_function($ann);

echo "Função de parada configurada: " . $funcao;

// Libera a rede
fann_destroy($ann);

?>