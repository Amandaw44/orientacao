<?php

class Produto {
    //atributos
     private $descricao;
     private $quanti;
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

     public function setDescricao($descricao): self
     {
          $this->descricao = $descricao;

          return $this;
     }

    public function getQuanti()
    {
        return $this->quanti;
    }

    public function setQuanti($quanti): self
    {
        $this->quanti = $quanti;

        return $this;
    }

     public function getValorUnit()
     {
          return $this->valorUnit;
     }

     public function setValorUnit($valorUnit): self
     {
          $this->valorUnit = $valorUnit;

          return $this;
     }

     public function getUnidadeMedida()
     {
          return $this->unidadeMedida;
     }

     public function setUnidadeMedida($unidadeMedida): self
     {
          $this->unidadeMedida = $unidadeMedida;

          return $this;
     }
}
//programa principal
$produtos = array();

for ($i=0; $i < 3; $i++) { 
$produto1 = new Produto();
$produto1->setDescricao(readline("Informe a descrição: "));
$produto1->setQuant(readline("Informe a quantidade: "));
$produto1->setValorUnit(readline("Informe o valor unitário: "));
$produto1->setUnidadeMedida(readline("Informe a unidade de medida: "));

array_push($produtos, $produto);
}

$mais_caro = $produtos[0];
$valor_mais_caro = $produtos[0]->getQuant() * $produtos[0]->getValorUnit();

foreach ($produtos as $produto) {
    $valorTotal = $produto->getQuant() * $produto->getValorUnit();
    if($valorTotal > $valor_mais_caro)
        $mais_caro = $produto;
        $valor_mais_caro = $produto->getQuant() * $produto->getValorUnit();
}

echo $produto->getDescricao() . "(" . $produto->getUnidadeMedida() . ")";
