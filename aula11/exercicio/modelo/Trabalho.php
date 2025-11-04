<?php

class Trabalho extends Instrumento{

    public function getNotaFinal()
    {
        $notaFinal = $this->getNota() + ($this->getNota() * (20/100));
        if($notaFinal > 0){
            return 10;
        }else{
            return $notaFinal;
        }
    }
}