<?php

require_once("modelo/Instrumento.php");
require_once("modelo/Participacao.php");
require_once("modelo/Prova.php");
require_once("modelo/Trabalho.php");

$instrumentos = array();

$inst = null;
$media = null;

for($i=0; $i< 3; $i++){
    $tipo = readline("Informe o tipo de instrumento: \n 1-Prova, 2-Trabalho, 3-Participação");

    if($tipo == 1){
        $inst = new Prova();
    }else if($tipo == 2){
        $inst = new Trabalho();
    }else if($tipo == 3){
        $inst = new Participacao();
    }

    $inst->setNota(readline("informe a nota: "));
    array_push($instrumentos, $inst);
}


foreach ($instrumentos as $int){
    echo "o istrumento teve nota final de " . $int->getNotaFinal() . "\n";
    $media = $media + $inst->getNota();
}
    
$media = $media /3;
echo $media;