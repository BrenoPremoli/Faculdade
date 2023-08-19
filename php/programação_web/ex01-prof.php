<?php

class Fabricante
{
    private string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }
}

class Produto 
{
    private int $codigo;
    private string $descricao;
    private float $preco;
    private Fabricante $fabricante;

    public function __construct(int $codigo, string $descricao, float $preco, Fabricante $fabricante) {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

    public function setPreco(float $preco) {
        $this->preco = $preco;
    }

    public function getFabricante() {
        return $this->fabricante->getNome();
    }

    public function getDetalhes() {
        return "O produto {$this->descricao} custa {$this->preco} reais e é fabricado por {$this->getFabricante()}.";
    }
}

$f1 = new Fabricante("BIC");

$p1 = new Produto(1, "Caneta azul", 10.00, $f1);
$p2 = new Produto(2, "Caneta tinteiro", 20.00, $f1);

$p1->setDescricao("Caneta vermelho");
$p1->setPreco(15.00);

echo $p1->getDetalhes();

echo "<br>";
echo "O produto {$p1->getDescricao()} custa {$p1->getPreco()} reais e é fabricado por {$p1->getFabricante()}.";

$p2->setDescricao("Caneta preta");
$p2->setPreco(10.00);
echo "<br>";
echo $p2->getDetalhes();
echo "<br>";
var_dump($p1);
echo "<br>";
var_dump($p2);