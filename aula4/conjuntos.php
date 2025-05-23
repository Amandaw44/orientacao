
<?php

//função para procurar um número em um array
function existe(array $vet, int $num) {
    foreach($vet as $v){
        if($v == $num)
            return true;
    }
    return false;
}

function imprime(array $vet){
    foreach($vet as $v)
    echo $v . ", ";
}
//vetor a 
$vetA = array();
echo "Informe os elementos de A: \n";
for($i=0; $i<5; $i++){
    $num = readline("Informe um número: ");
    array_push($vetA, $num);
}

//vetor b - deve ser lido
$vetB = array();
echo "\nINforme os elementos de B:  \n";
for($i=0; $i<5; $i++){
    $num = readline("Informe um número: ");
    array_push($vetB, $num);
}

//conjunto C - intersecçao (verificar se um elemento de A existe em B)
$vetC = array();
foreach($vetA as $a) {
    if(existe($vetB, $a))
        array_push($vetC, $a);
    }

echo "\nVetor C - intersecção:  \n";
imprime($vetC);

//conjunto D - uniao de A e B
$vetD = array();
foreach($vetA as $a){
    if(existe($vetD, $a))
         array_push($vetD, $a);
}
foreach($vetB as $b) {
    if(existe($vetD, $b))
        array_push($vetD, $b);
}

echo "\nVetor D - união: \n";
imprime($vetD);
