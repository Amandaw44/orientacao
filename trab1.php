<?php

class Produto {
    //atributos
     private $descricao;
     private $quant;
     private $valorUnit;
     private $unidadeMedida;


     //metodos
      public function __toString() {
        $dados = "Descrição - " . $this->descricao;
        $dados = " | Quantidade - " . $this->quant;
        $dados = " | Valor unitário - " . $this->valorUnit;
        $dados = " | Unidade de Medida - " . $this->unidadeMedida;
        return $dados;
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
     * Get the value of quant
     */
    public function getQuant()
    {
        return $this->quant;
    }

    /**
     * Set the value of quant
     */
    public function setQuant($quant): self
    {
        $this->quant = $quant;

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

$produtos = array();

for ($i=0; $i < 3; $i++) { 
$produto1 = new Produto();
$produto1->setDescricao(readline("Informe a descrição: "));
$produto1->setQuant(readline("Informe a quantidade: "));
$produto1->setValorUnit(readline("Informe o valor unitário: "));
$produto1->setUnidadeMedida(readline("Informe a unidade de medida: "));

    array_push($produtos, $produto);
}

foreach ($produtos as $produto) {
    $valorTotal = $produto->getQuanti() * $produto->getValorUnit();
    echo $produto->getDescricao() . "(" . $produto->getUnidadeMedida() . ") | " . $produto->getQuanti() . " X " . $produto->getValorUnit() . " = " . $valorTotal . "\n";
}
