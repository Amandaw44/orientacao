<?php

for($i=0; $i<10; $i++) {
    $numero = readline ("Informe um número: ");
     if($numero > 0)
        echo "Numero positivo\n";
    else if($numero == 0)
        echo "O número é 0\n";
    else
        echo "Numero negativo\n";
    
}
