<?php

trait Utils
{
    public function buscaCep(){

    }

    public function validaCpf(){

    }
}
class Utils2{
    public static function buscaCep(){

    }
}

abstract class Conta
{
    protected string $agencia;
    protected string $conta;
    protected float $saldo;

    public function __construct($agencia, $conta, $saldo) {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function sacar($valor){
        if (($this->saldo > 0) && ($this->saldo >= $valor))
        {
            $this->saldo -= $valor;
        } 
        else
        {
            echo "Saldo Insuficiente";
        }
    }

    public function verSaldo() {
        echo "Saldo atual: R$ " . $this->saldo . "<br>";
    }
}

final class ContaPoupanca extends Conta
{
    use Utils;
    private float $rendimento;
    
    private float $taxa=10.00;
    public  function __set($atrib, $value){
        $this->$atrib = $value;
    }
    public function __get($atrib){
        return $this->$atrib;
    }

    public function sacar($valor){
        if (($this->saldo > 0) && ($this->saldo >= $valor + $this->taxa))
        {
            $this->saldo -= $valor + $this->taxa;
        } else{
            echo "Saldo Insuficiente";
        }
    }
}

class ContaCorrente extends Conta{
    private float $limite = 100.00;
    public function __construct($agencia, $conta, $saldo, $limite) {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function sacar($valor){
        if (($this->saldo > 0) && ($valor <= $this->saldo + $this->limite))
        {
            $this->saldo -= $valor;
        } else{
            echo "Saldo Insuficiente";
        }
    }
    public function verSaldo() {
        echo "Saldo atual: " . $this->saldo . " Limite + " . $this->limite . "<br>";
    }
}


/*$c1 = new ContaPoupanca(500.00);
$c1->verSaldo();
$c1->depositar(500.00);
$c1->sacar(50.00);
$c1->verSaldo();
echo "<br>";
$c2 = new ContaCorrente(100);
$c2->verSaldo();
$c2->depositar(100.00);
$c2->sacar(200.00);
$c2->verSaldo();
echo "<br>";
*/
$cp1 = new ContaCorrente("SanItaSilXa", 1, 500, 200);
$cp1->verSaldo();
$cp1->depositar(500.00);
$cp1->sacar(50.00);
$cp1->verSaldo();

Utils2::buscaCep();
$cp2 = new ContaPoupanca("", "", 0.00);
$cp2->buscaCep();
$cp2->__get("rendimento");
$cp2->__set("taxa", 10.00);
$cp2->buscaCep();


?>