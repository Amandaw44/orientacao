<?php 

//Ler os números
$num1 = readline("Informe o primeiro número: ");
$num2 = readline("Informe o segundo número: ");

$menor = 0;
$maior = 0;

if($num1 < $num2){
    $menor = $num2;
    $maior = $num1;
}

//Números divisíveis por 5 do intervalo
for($i=$num1+1; $i<$maior; $i++) {
    if($i % 5 == 0)
        echo $i . "\n";
 }