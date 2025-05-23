
<?php

//ler os dados de 4 pessoas, armazenado em uma matriz
$pessoas = array();
for($i=1; $i<=4; $i++){
    echo "\n-------Pessoa " . $i . "-------\n";
    $pessoa["nome"] = readline("Informe o nome: ");
    $pessoa["idade"] = readline("Informe sua idade: ");
    $pessoa["cidadeNatal"] = readline("Informe a cidade natal: ");
    $pessoa["profissao"] = readline("Informe a profisão: ");

    array_push($pessoas, $pessoa);
}
 //Percorrer a matriz pra econtrar a pessoa mais velha
$pessoaMaisVelha = $pessoas[0];
foreach($pessoas as $p){
    if($p["idade"] > $pessoaMaisVelha["idade"])
        $pessoaMaisVelha = $p;
}

    echo "Dados da pessoa mais velha:\n";
    echo "Nome: " . $pessoaMaisVelha["nome"] . "\n";
    echo "Idade: " . $pessoaMaisVelha["idade"] . "\n";
    echo "Cidade Natal: " . $pessoaMaisVelha["cidadeNatal"] . "\n";
    echo "Profissão: " . $pessoaMaisVelha["profissao"] . "\n";
