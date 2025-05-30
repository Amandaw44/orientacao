<?php

function fatorial($nro){
    $fat = $nro;
    for($i=$nro-1; $i>=1; $i--){
        $fat *= $i;
    }
   return $fat;
}

//Program aprincipal
do {
    $num = readline("informe o número para calculo do fatorial: ");
    if($num != 0) {
        echo "O fatorial de $num é: " . fatorial($num) . "\n";
    }

} while ($num != 0);