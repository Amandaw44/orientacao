<?php

$numeros = array();
$media = 0;

for ($i=0; $i<10; $i++){
    $numero [$i] = readline("Informe um número: ");

    $media += $numero [$i];

}

$media = $media / 10;

echo "A média dos números são: ". $media . "\n";
