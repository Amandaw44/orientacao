<?php

class Carta{
    private $numero;
    private $nome;
    
    public function __toString()
    {
        
    }


    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
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
}
//programa principal
$cartas = array();

$carta= new Carta();
$carta->setNumero(1);
$carta->setNome("Fogo");
array_push($cartas, "Fogo");

$carta= new Carta();
$carta->setNumero(2);
$carta->setNome("Agua");
array_push($cartas, "Agua");

$carta= new Carta();
$carta->setNumero(3);
$carta->setNome("Terra");
array_push($cartas, "Terra");

$carta= new Carta();
$carta->setNumero(4);
$carta->setNome("Ar");
array_push($cartas, "Ar");

$carta= new Carta();
$carta->setNumero(5);
$carta->setNome("Diamente");
array_push($cartas, "Diamente");

$carta= new Carta();
$carta->setNumero(6);
$carta->setNome("Metal");
array_push($cartas, "Metal");

$carta= new Carta();
$carta->setNumero(7);
$carta->setNome("Gelo");
array_push($cartas, "Gelo");


print("----JOGO ADIVINHA A CARTA----\n");
print("1 - Jogar\n");
print("2 - Como jogar\n");
print("3 - Lista de cartas\n");
print("4 - Sair\n");

$opcao = readline("Escolha uma opção: ");
    if ($opcao == 1) {
        $cartaEscolhida = readline("Escolha uma carta (1-7): ");
        if (in_array($cartaEscolhida, $cartas)) {
            print("Você escolheu a carta: " . $cartaEscolhida . "\n");
        } else {
            print("Carta inválida!\n");
        }
    } elseif ($opcao == 2) {
        print("Como jogar: Escolha uma carta e tente adivinhar a carta escolhida pelo computador.\n");
    } elseif ($opcao == 3) {
        print("Lista de cartas:\n");
        foreach ($cartas as $carta) {
            print($carta . "\n");
        }
    } elseif ($opcao == 4) {
        print("Fim do jogo...\n");
    } else {
        print("Opção inválida!\n");
    }

