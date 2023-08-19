<?php

class Teste {
    private int $a;
    private int $b;
    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }
    public function soma(int $valor){
        return $this->a + $this->b + $valor;
    }
}

$t = new Teste(10, 30);
echo "Resultado " . $t->soma(50);

?>