
<?php

$vetor = array(5, 7, 8, 4, 1, 0, 3);

/*
//imprimir o quarto elemento do array
echo $vetor[3];
echo "\n";

//segundo elemento
echo $vetor[1];
echo "\n";

//imprimir todos os elementos do array - FOR 
//count= tamanho do array
for($i=0; $i<count($vetor); $i++); {
    echo $vetor[$i];
    echo "\n";
}
*/

// adicionar um elemento no array
array_push($vetor, 20);


//Imprimir todos os elementos do array - FOREACH
 foreach($vetor as $v) {
    echo $v;
    echo "\n";
}
