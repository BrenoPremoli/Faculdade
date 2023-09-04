<?php

class Circulo{
    private float $x;
    private float $y;
    private float $raio;
    public function __construct($x = 0, $y = 0, $raio = 1) {
        $this->x = $x;
        $this->y = $y;
        $this->setRaio($raio);
    }
    public function getX(){
        return $this->x;
    }
    public function setX(float $x){
        $this->x = $x;
    }
    public function getY(){
        return $this->y;
    }
    public function setY(float $y){
        $this->y = $y;
    }
    public function getRaio(){
        return $this->raio;
    }
    public function setRaio(float $raio){
        if ($raio <= 0) {
            $raio = 1;
        }
        $this->raio = $raio;
    }
    public function inflar($aumenta) {
        $this->raio = $this->raio * $aumenta;
    }

    public function desinflar($diminui) {
        if ($diminui > 0.0) {
            $this->raio = $this->raio / $diminui;
        }
    }
    public function mover($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function moverOrigem() 
    {
        $this->x = 0;
        $this->y = 0;
    }
    public function calcularArea() {
        echo "Área: " . pi() * pow($this->raio, 2);
    }
    public function mostrarPonto()
    {
        echo "<br>X = " . $this->x . " e Y = " . $this->y . " e Raio: " . $this->raio;
        echo "<br>";
    }
    
}

$p1 = new Circulo(1, 4, 5);
$p1->mostrarPonto();

$p1->inflar(5);
$p1->mostrarPonto();

$p1->desinflar(4);
$p1->mostrarPonto();

$p1->moverOrigem();
$p1->mostrarPonto();

$p1->mover(2, 8);
$p1->mostrarPonto();

echo "<br>";
$p1->calcularArea();

?>