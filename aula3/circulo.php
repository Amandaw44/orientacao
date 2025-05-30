<?php

function area($raio){
     $area = 3.14 * $raio * $raio;
    
 return $area;
}

function circunferencia($raio){
    $circunferencia = 2 * 3.14 * $raio;

    return $circunferencia;
}

for($i=0; $i<3; $i++){
    $raio = readline ("informe o raio: ");
    echo "Area do circulo é: " . area($raio) . "\n";
    echo "Circunferencia é:  " . circunferencia($raio) . "\n";
}