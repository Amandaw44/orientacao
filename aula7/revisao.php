<?php

class Livro {
    //Atributos
    private $titulo;
    private $autor;
    private $genero;
    private $nroPaginas;
    private $valorPago;

    //Método toString é executado quando o objeto é impresso
    public function __toString()
    {
        $livro = "Título: " . $this->titulo;
        $livro .= " | Autor: " . $this->autor;
        $livro .= " | Gênero: " . $this->genero;
        $livro .= " | Número de páginas: " . $this->nroPaginas;
        $livro .= " | Valor Pago: " . $this->valorPago;
        return $livro . "\n";
    }

    

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of nroPaginas
     */
    public function getNroPaginas()
    {
        return $this->nroPaginas;
    }

    /**
     * Set the value of nroPaginas
     */
    public function setNroPaginas($nroPaginas): self
    {
        $this->nroPaginas = $nroPaginas;

        return $this;
    }

    /**
     * Get the value of valorPago
     */
    public function getValorPago()
    {
        return $this->valorPago;
    }

    /**
     * Set the value of valorPago
     */
    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }
}

//programa principal

$livros = array();

do{
    echo "\n-----MENU-----\n";
    echo "1-Nome do livro\n";
    echo "2-Autor\n";
    echo "3-Gênero\n";
    echo "4-Quantidade de páginas\n";
    echo "5-Valor pago\n";
    echo "Sair\n";

    $opcao= readline("Informe a opção: ");
    if($opcao == 1){
        $livros = new Livro();
        $livros->setTitulo(readline("titulo: "));
        $livros->setAutor(readline("Autor: "));
        $livros->setGenero(readline("GêNero: "));
        $livros->setNroPaginas(readline("Páginas: "));
        $livros->setValorPago(readline("Valor: "));

        array_push($livros, $livro);
    }

    if($opcao == 2){
        foreach ($livros as $l){
            echo $l;
        }
    }

    if($opcao == 3){
        $idx = readline("informe o indice do livro: ");

        if($idx >=0 && $idx < count($liros))
            echo $livros[$idx];
        else
            echo "Indice informado não existe no array\n";
    }

    if($opcao == 4){
      
    }

    
}