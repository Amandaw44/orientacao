<?php

class Produto {
    //atributos
     private $descricao;
     private $quanti;
     private $valorUnit;
     private $unidadeMedida;


     //metodos
     public function getValorTotal(){
        return 
    }

     //GETs e SETs 
     public function getDescricao()
     {
          return $this->descricao;
     }

     /**
      * Set the value of descricao
      */
     public function setDescricao($descricao): self
     {
          $this->descricao = $descricao;

          return $this;
     }

    /**
     * Get the value of quanti
     */
    public function getQuanti()
    {
        return $this->quanti;
    }

    /**
     * Set the value of quanti
     */
    public function setQuanti($quanti): self
    {
        $this->quanti = $quanti;

        return $this;
    }

     /**
      * Get the value of valorUnit
      */
     public function getValorUnit()
     {
          return $this->valorUnit;
     }

     /**
      * Set the value of valorUnit
      */
     public function setValorUnit($valorUnit): self
     {
          $this->valorUnit = $valorUnit;

          return $this;
     }

     /**
      * Get the value of unidadeMedida
      */
     public function getUnidadeMedida()
     {
          return $this->unidadeMedida;
     }

     /**
      * Set the value of unidadeMedida
      */
     public function setUnidadeMedida($unidadeMedida): self
     {
          $this->unidadeMedida = $unidadeMedida;

          return $this;
     }
}

for ($i=0; $i < 3; $i++) { 
$produto1 = new Produto();
$produto1->setDescricao(readline("Informe a descrição: "));
$produto1->setQuanti(readline("Informe a quantidade: "));
$produto1->setValorUnit(readline("Informe o valor unitário: "));
$produto1->setUnidadeMedida(readline("Informe a unidade de medida: "));
}

echo "$produto1: $descricao "; 