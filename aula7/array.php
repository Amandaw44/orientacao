<?php 

class Robo{
//artibutos 
    private $velocidade;
    private $tipo;
    private $peso;

    //métodos
    public function ligar() {
        echo "Robo ligado\n";
    }

    public function mover(){
        echo "Robo movendo\n";
    }

    public function __toString()
    {
        $dados = "Velocidade: " . $this->velocidade;
        $dados .= "| Tipo: " . $this->tipo;
        $dados .= "| Peso " . $this->peso;
        $dados .= "n\";
         return $dados;
    }

   //Gets e SETs
    public function getVelocidade()
    {
        return $this->velocidade;
    }

    /**
     * Set the value of velocidade
     */
    public function setVelocidade($velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }
} //Fim classe 

//programa principal 
$robo1 = new Robo();
$robo1->setPeso(500);
$robo1->setTipo("Lego");
$robo1->setVelocidade(5);

$robo2 = new Robo();
$robo2->setPeso(1000);
$robo2->setTipo("Arduino");
$robo2->setVelocidade(10);

$robos = array($robo1, $robo2);


$robo3 = new Robo();
$robo3->setPeso(1500)
      ->setTipo("Arduino");                                                                                                               
      ->setVelocidade();
      ->set

foreach($robos as $r){
    echo $r;
}