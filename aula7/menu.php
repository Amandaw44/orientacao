<?php

class Pessoa{
     
    //atributos 
    private $nome;
    private $sobrenome;
    private $idade;

    //Metodos 
    public function getDados(){
        $dados = $this->nome . " " . $this->sobrenome;
        $dados .= ", " . $this->idade . " anos\n";
        return $dados;
    }

    public function __toString(){
        $dados = $this->nome . " " . $this->sobrenome;
        $dados .= ", " . $this->idade . " anos\n";
        return $dados;
    }
    

    /**
     * GETs e SETs
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}//classe pessoa

//Programa Principal
$pessoas = array();

do{
    echo "\n-----MENU-----\n";
    echo "1-Cadastrar\n";
    echo "2-Listar\n";
    echo "3-Sair\n";

    $opcao = readline("Informe a opção: ");
    if($opcao == 1){
        //Cadastrar2

        $pessoa = new Pessoa();
        $pessoa->setNome(readline("Informe o nome: "));
        $pessoa->setSobrenome(readline("Informe o sobrenome: "));
        $pessoa->setIdade(readline("Informe a idade: "));

        array_push($pessoas,$pessoa);


    } else if($opcao == 2){
        //Listar
        if(count($pessoas) > 0){  
            foreach($pessoas as $p){
            //echo $p->getNome() . " " . $p->getSobrenome() . ", " . $p->getIdade() . " anos\n";
            echo $p;
            }
        }else
            echo "Nenhuma pessoa cadastrada!\n";

    }else if ($opcao == 0){
        //sair
        echo "Programa encerrado!\n";
    } else{
        echo "Opção invalida!\n";
    }

} while($opcao !=0);