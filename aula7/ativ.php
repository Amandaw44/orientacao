<?php

class Receita{

    private $descricao;
    private $valor;

    //Metodos
    public function __toString(){
        $dados = $this->descricao . " R$" . $this->valor . "\n";
        return $dados;
    }

    /**
     * Get the value of descricao
     */
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
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa{
    private $descricao;
    private $valor;

    public function __toString(){
        $dados = $this->descricao . " R$" . $this->valor . "\n";
        return $dados;
    }

      /**
     * Get the value of descricao
     */
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
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
    
}
//Programa principal

$receitas = array();
$despesas = array();


do{
echo "\n-----MENU-----\n";
echo "1- Adicionar Receita\n";
echo "2- Adicionar despesa\n";
echo "3- Listar receitas\n";
echo "4- Listar despesas\n";
echo "5- Sumarizar\n";
echo "6- Sair\n";

$opcao = readline("Informe a opção: ");
    if($opcao == 1){
        //Adicionar receita

        $receita = new Receita();
        $receita->setDescricao(readline("Informe a descrição: "));
        $receita->setValor(readline("Informe o valor: "));

        array_push($receitas,$receita);

    } else if($opcao == 2){
        //Adicionar despesa
       $despesa = new Despesa();
       $despesa->setDescricao(readline("Informe a descrição: "));
       $despesa->setValor(readline("Informe o valor: "));

       array_push($despesas, $despesa);
    
    }else if($opcao == 3){
        if(count($receitas) > 0){  
            foreach($receitas as $r){
                echo $r;
            }
        }else
            echo "Nenhuma receita cadastrada!\n";

    }else if($opcao == 4){
        if(count($despesas) > 0){  
            foreach($despesas as $d){
                echo $d;
            }
        }else
            echo "Nenhuma despesa cadastrada!\n";

    }else if($opcao == 5){
        $totalDespesas = 0;
        $totalReceitas = 0;
        foreach($receitas as $receita){
            $totalReceitas += $receita->getValor();
        
        }echo "Total de Receitas:" . $totalReceitas . "\n";

        foreach($despesas as $despesa){
            $totalDespesas += $despesa->getValor();

        }echo "Total de despesas: " . $totalDespesas . "\n";
        
        echo "Saldo: " . $totalReceitas - $totalDespesas . "\n";

    }else if ($opcao == 0){
        //sair
        echo "Programa encerrado!\n";
    } else{
        echo "Opção invalida!\n";
    }

}while($opcao !=0);