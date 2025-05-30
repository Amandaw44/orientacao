<?php

for ($i=0; $i<5; $i++){
    echo "\n -----PESSOA" . $i . "-----\n";
    $nome = readline ("Informe nome: ");
    $peso = readline ("Informe peso: ");
    $altura = (float) readline ("informe altura: ");

    $imc = $peso / ($altura *$altura); 

    echo "$nome tem peso $peso, altura $altura e IMC $imc.";
    echo "\n";
}