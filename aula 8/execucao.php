<?php

require_once("modelo/Clube.php");
require_once("modelo/Jogador.php");

$chape = new Clube();
$chape->setNome("Chapecoense");
$chape->setDivisao("B");
$chape->setAnoFundacao(1977);
//print_r($chape);

$jogador = new Jogador();
$jogador->setNome("neymar");
$jogador->setNumero("10");
$jogador->setPosicao("Atacante");
$jogador->setClube($clube);

//imprimir os dados
echo "Dados do Jogador: \n";
echo "nome: " .$jogador->getNome() . "\n";
echo "numero: " .$jogador->getNumero() . "\n";
echo "posição: " .$jogador->getPosicao() . "\n";
echo "clube: " .$jogador->getClube()->getNome() . "\n";