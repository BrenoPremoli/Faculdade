<?php

class Contador{
    private int $contagem;
    public function __construct() {
        $this->contagem = 0;
    }

    public function zerar(){
        $this->contagem = 0;
    }
    public function incrementar(){
        $this->contagem++;
    }
    public function mostrarValor(){
        echo "<br>Valor do contador: " . $this->contagem;
    }
}

$c1 = new Contador();
$c1->incrementar();
$c1->incrementar();
$c1->mostrarValor();
$c1->zerar();
$c1->mostrarValor();

?>