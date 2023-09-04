<?php

class Ponto2D{
    private float $x;
    private float $y;
    public function __construct($x = 0.0, $y = 0.0){
        $this->x = $x;
        $this->y = $y;
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
    public function mostrarPonto()
    {
        echo "<br>X = " . $this->x . " e Y = " . $this->y;
        echo "<br>";
    }
    public function definirPonto(Ponto2D $outro)
    {
        $this->x = $outro->getX();
        $this->y = $outro->getY();
    }
    public function compararPonto(Ponto2D $outro)
    {
        if ($this->x === $outro->getX() && $this->y === $outro->getY())
        {
            echo "<br>Pontos Iguais";
        }else{
            echo "<br>Pontos Diferentes";
        }
    }
    public function calcularDistancia(Ponto2D $outro)
    {
        $dX = $this->x - $outro->getX();
        $dY = $this->y - $outro->getY();
        echo "<br>Distância entre os Pontos: " . sqrt(($dX ** 2) + ($dY ** 2));
    }
    public function criarClone(){
        return new Ponto2D($this->x, $this->y);
    }
}

$p1 = new Ponto2D(1, 4);
$p1->mostrarPonto();
$p2 = new Ponto2D(2, 8);
$p2->mostrarPonto();
$p3 = new Ponto2D(-1, 2);
$p3->mostrarPonto();

//$p1->definirPonto($p2);
//$p1->mostrarPonto();

$p1->compararPonto($p2);
echo "<br>";
$p1->compararPonto($p3);

echo "<br>";
$p1->calcularDistancia($p2);

echo "<br>";
$p4 = $p2->criarClone();
$p4->mostrarPonto();



?>