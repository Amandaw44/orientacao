
<?php 

$pessoal = array("nome" => "Amanda",
                "idade" => "15",
                "escola" => "IFPR");
            
$pessoa2 = array("nome" => "isabela",
                "idade" => "15",
                "escola" => "IFPR");
            

//matriz


//imprimir a idade da pessoa
echo $pessoal["idade"];
echo "\n";

//percorrer o array associativo
foreach($pessoal as $chave => $p){
    echo $chave . " = " . $p . "\n" ;
}
