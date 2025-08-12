<?php

require_once("clube.php");

class Jogador{
    private string $nome;
    private string $posicao;
    private int $numero;
    private Clube $clube;


    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of posicao
     */
    public function getPosicao(): string
    {
        return $this->posicao;
    }

    /**
     * Set the value of posicao
     */
    public function setPosicao(string $posicao): self
    {
        $this->posicao = $posicao;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of clube
     */
    public function getClube()
    {
        return $this->clube;
    }

    /**
     * Set the value of clube
     */
    public function setClube($clube): self
    {
        $this->clube = $clube;

        return $this;
    }
}