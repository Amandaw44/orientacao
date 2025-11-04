<?php

class Instrumento{
    protected float $nota;

    public function getNotaFinal(){
        $notaFinal = $this->getNotaFinal();
        if($notaFinal > 10){
            return 10;
        }
    }


    /**
     * Get the value of nota
     */
    public function getNota(): float
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     */
    public function setNota(float $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}