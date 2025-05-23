
<?php

$pessoas = array (
    1 => array("nome" => "Manuel de medeiros",
                 "endereço" => "Rua das Acácias",
                 "cidade" => "Foz do iguaçu",
                 "UF" => "PR",),

    2 => array("nome" => "Juliana de Amaral",
                 "endereço" => "Rua dos Pinheiros",
                 "cidade" => "Florianópolis",
                 "UF" => "SC",),

    3 => array("nome" => "Rodrigo Baidek",
                 "endereço" => "Rua Dom Pedro I", 
                 "cidade" => "Petrópolis",
                 "UF" => "RJ",),

    4 => array("nome" =>  "Fabíola da Silva",
                 "endereço" => "Rua Chile",
                 "cidade" => "Guarulhos",
                 "UF" => "SP",),
);

foreach ($pessoas as $x) {
    echo $x["nome"];
    echo " | " . $x["endereço"];
    echo " | " . $x["cidade"];
    echo " | " . $x["UF"];
    echo "\n";
}
