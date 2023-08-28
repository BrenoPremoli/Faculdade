<?php

class Porta{
    private bool $aberta;
    private string $cor;
    private float $dimensaoX;
    private float $dimensaoY;
    private float $dimensaoZ;
    public function __construct($aberta, $cor, $dimensaoX, $dimensaoY, $dimensaoZ)
    {
        $this->aberta = $aberta;
        $this->cor = $cor;
        $this->dimensaoX = $dimensaoX;
        $this->dimensaoY = $dimensaoY;
        $this->dimensaoZ = $dimensaoZ;
    }
    public function getAberta(){
        return $this->aberta;
    }
    public function setAberta(string $aberta){
        $this->aberta = $aberta;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor(string $cor){
        $this->cor = $cor;
    }
    public function getDimensaoX(){
        return $this->dimensaoX;
    }
    public function setDimensaoX(int $dimensaoX){
        $this->dimensaoX = $dimensaoX;
    }
    public function getDimensaoY(){
        return $this->dimensaoY;
    }
    public function setDimensaoY(int $dimensaoY){
        $this->dimensaoY = $dimensaoY;
    }
    public function getDimensaoZ(){
        return $this->dimensaoZ;
    }
    public function setDimensaoZ(int $dimensaoZ){
        $this->dimensaoZ = $dimensaoZ;
    }
    public function pinta(string $s){
        $this->cor = $s;
    }
    public function abre(){
        $this->aberta = true;
    }
    public function fecha(){
        $this->aberta = false;
    }
}

class Casa extends Imovel{
    private Porta $porta1;
    private Porta $porta2;
    private Porta $porta3;
    public function __construct($cor, $totalPortas, Porta $porta1, Porta $porta2, Porta $porta3)
    {
        parent::__construct($cor, 3);
        $this->porta1 = $porta1;
        $this->porta2 = $porta2;
        $this->porta3 = $porta3;
    }
    public function getPorta1(){
        return $this->porta1;
    }
    public function setPorta1(int $porta1){
        $this->porta1 = $porta1;
    }
    public function getPorta2(){
        return $this->porta2;
    }
    public function setPorta2(int $porta2){
        $this->porta2 = $porta2;
    }
    public function getPorta3(){
        return $this->porta3;
    }
    public function setPorta3(int $porta3){
        $this->porta3 = $porta3;
    } 
    
    public function portasAbertas() {
        $portasAbertas = 0;

        if ($this->porta1->getAberta()) {
            $portasAbertas++;
        }

        if ($this->porta2->getAberta()) {
            $portasAbertas++;
        }

        if ($this->porta3->getAberta()) {
            $portasAbertas++;
        }

        return $portasAbertas;
    }
}

class Edificio extends Imovel {
    private int $totalDeAndares;
    private array $portas;
    public function __construct($cor, $totalPortas, $totalDeAndares, $portas)
    {
        parent::__construct($cor, $totalPortas);
        $this->totalDeAndares = $totalDeAndares;
        $this->portas = $portas;
    }
    public function getTotalDeAndares(){
        return $this->totalDeAndares;
    }
    public function setTotalDeAndares(int $totalDeAndares){
        $this->totalDeAndares = $totalDeAndares;
    }
    public function getPortas(){
        return $this->portas;
    }
    public function setPortas($porta){
        $this->portas = $porta;
    } 
    public function portasAbertas() {
        $portasAbertas = 0;

        for($i=0; $i < count($this->portas); $i++)
        {
            if ($this->portas[$i]->getAberta()) {
                $portasAbertas++;
            }
        }
        return $portasAbertas;
    }
    public function adicionaPorta(Porta $p){
        $this->portas[] = $p;
        $this->totalPortas++;
    }
    public function adicionaAndar()
    {
        $this->totalDeAndares++;
    }
    public function totalAndares()
    {
        return $this->totalDeAndares;
    }
}

abstract class Imovel
{
    protected string $cor;
    protected int $totalPortas;
    public function __construct($cor, $totalPortas) {
        $this->cor = $cor;
        $this->totalPortas = $totalPortas;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor(string $cor){
        $this->cor = $cor;
    }
    public function getTotalPortas(){
        return $this->totalPortas;
    }
    public function setTotalPortas(int $totalPortas){
        $this->totalPortas = $totalPortas;
    }
    public function pinta(string $s) {
        $this->cor = $s;
    }
    public function totalPortas() {
        return $this->totalPortas;
    }
}

$porta1 = new Porta(true, 'verde', 5, 10, 15);
$porta2 = new Porta(false, 'azul', 15, 20, 25);
$porta3 = new Porta(true, 'vermelho', 25, 30, 35);

$casa = new Casa('amarelo', 3, $porta1, $porta2, $porta3);

echo "Cor: " . $casa->getCor() . "<br>";
echo "Total de portas: " . $casa->totalPortas() . "<br>";
$casa->pinta('branco');
echo "Nova cor: " . $casa->getCor() . "<br>";
echo "Número de portas abertas: " . $casa->portasAbertas() . "<br>";
$porta2->abre();
echo "Número de portas abertas: " . $casa->portasAbertas() . "<br><br>";
$porta2->fecha();

$edificio = new Edificio('cinza', 5, 10, [$porta1, $porta2]);

echo "Cor: " . $edificio->getCor() . "<br>";
echo "Total de portas: " . $edificio->totalPortas() . "<br>";
$edificio->pinta('preto');
echo "Nova cor: " . $edificio->getCor() . "<br>";
$edificio->adicionaPorta(new Porta(true, 'marrom', 100, 220, 180));
echo "Número de portas abertas: " . $edificio->portasAbertas() . "<br>";
echo "Total de portas: " . $edificio->totalPortas() . "<br>";
$edificio->adicionaAndar();
echo "Total de andares: " . $edificio->totalAndares() . "<br>";

?>