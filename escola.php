<?php

class Escola {
    //Atributos
    private $nome;
    private $endereco;
    private $quantalunos;


    //GETs e SETs
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
     * Get the value of quantalunos
     */
    public function getQuantalunos()
    {
        return $this->quantalunos;
    }

    /**
     * Set the value of quantalunos
     */
    public function setQuantalunos($quantalunos): self
    {
        $this->quantalunos = $quantalunos;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}

$escolas = array();

for ($i=0; $i < 4; $i++) { 
    $escola1 = new Escola;
    $escola1->setEndereco(readline("Informe o endereço: "));
    $escola1->setNome(readline("Informe o nome: "));
    $escola1->setQuantalunos(readline("Informe a quantidade de alunos: ")); 

    array_push($escolas, $escola1);
}



