 
<?php
    se ( $_SERVER [ "REQUEST_METHOD" ] == "POST" ) {
        $motorista = $_POST [ 'motorista' ];
        $valor_hora = $_POST [ 'valor_hora' ];
        $horas = $_POST [ 'horas' ];
        
        $total = $horas * $valor_hora ;

        eco "<br><hr><br>" ;
        eco "Motorista: " . $motorista . "<br>" ;
        eco "Tempo: " . $horas . " horas<br>" ;
        eco "Total: R$" . formato_número ( $total , 2 , ',' , '.' );
 }
    ? >