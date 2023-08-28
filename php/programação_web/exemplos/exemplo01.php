<?php

    class Fabricante {
        private string $nome;
        public function __construct($nome)
        {
            $this->nome = $nome;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome(string $nome)
        {
            return $this->nome = $nome;
        }
    }

    class Produto {
        private int $codigo;
        //private string $nome;
        private string $descricao;
        //private int $quantidade;
        protected float $preco;
        private Fabricante $fabricante;

        public function __construct($codigo, $descricao, $preco, Fabricante $fabricante)
        {
            $this->codigo = $codigo;
            $this->descricao = $descricao;
            $this->preco = $preco;
            $this->fabricante = $fabricante;
        }
        /*public function __construct()
        {
            $this->codigo = 0;
            $this->descricao = "";
            $this->preco = 0.0;
        }*/

        public function getDescricao(){
            return $this->descricao;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setDescricao(string $descricao){
            $this->descricao = $descricao;
        }

        public function setPreco(float $preco){
            $this->preco = $preco;
        }

        public function getFabricante() {
            return $this->fabricante->getNome();
        }

        public function getDetalhes()
        {
            return "O produto {$this->descricao} custa {$this->preco} reais e é fabricado por {$this->getFabricante()}";
        }
    }

    $f1 = new Fabricante("BIC");
    $p1 = new Produto(1, "Caneta azul", 10.00, $f1);
    $p2 = new Produto(2, "Caneta tinteiro", 20.00, $f1);

    $p1->setDescricao("Caneta Vermelha");
    $p1->setPreco(15.00);

    echo $p1->getDetalhes();
    echo "<br>";
    $p2->setDescricao("Caneta Preta");
    $p2->setPreco(10.00);
    echo "<br>";
    echo $p2->getDetalhes();
    echo "<br>";
    echo "<br>";
    echo var_dump($p1);
    echo "<br>";
    echo var_dump($p2);
?>