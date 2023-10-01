<?php

class Pais{
    private string $nome;
    private string $capital;
    private float $km2;
    private array $fronteira;
    public function __construct($nome, $capital, $km2, $fronteira) {
        $this->nome = $nome;
        $this->capital = $capital;
        $this->km2 = $km2;
        $this->fronteira = $fronteira;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function getCapital(){
        return $this->capital;
    }
    public function setCapital(string $capital){
        $this->capital = $capital;
    }
    public function getKm2(){
        return $this->km2;
    }
    public function setKm2(float $km2){
        if ($km2 <= 0.0) {
            $km2 = 1;
        }
        $this->km2 = $km2;
    }
    public function getFronteira(){
        return $this->fronteira;
    }
    public function setFronteira($fronteira){
        $this->fronteira[] = $fronteira;
    }
    public function paisIgual(Pais $p){
        if ($this->nome === $p->getNome() && $this->capital === $p->getCapital())
        {
            echo "Países Iguais";
        } else{
            echo "Países Diferentes";
        }
    }
    public function paisFronteira($pais) {
        $this->fronteira[] = $pais;
    }
    public function listaFronteira(){
        foreach ($this->fronteira as $pais) {
            echo $pais . " - ";
        }
    }
    public function vizinhosComum(Pais $p) {
        $x = [];
        $x = array_intersect($this->fronteira, $p->getFronteira());
        foreach ($x as $pais) {
            echo $pais . " - ";
        };
    }
}

$brasil = new Pais('Brasil', 'Brasília', 1, []);
echo "Nome do país: " . $brasil->getNome() . "<br>";
echo "Capital do país: " . $brasil->getCapital() . "<br>";
echo "Área do país (km²): " . $brasil->getKm2() . "<br>";

$brasil->paisFronteira('Argentina');
$brasil->paisFronteira('Uruguai');
$brasil->paisFronteira('Paraguai');
$brasil->listaFronteira();
echo "<br>";

$argentina = new Pais('Argentina', 'Buenos Aires', 2, ["Brasil"]);

echo "<br>";
$brasil->paisIgual($argentina);

echo "<br>";
$brazil = new Pais('Brasil', 'Brasília', 4, []);
$brasil->paisIgual($brazil);

echo "<br>";
$uruguai = new Pais('Uruguai', 'Montevidéu', 3, ["Brasil", "Argentina", "Paraguai"]);

echo "<br>";
$vizinhosComuns = $brasil->vizinhosComum($uruguai);

?>