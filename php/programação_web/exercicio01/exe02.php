<?php

class Empregado
{
    private string $nome;
    private string $sobrenome;
    private float $salario;
    public function __construct($nome, $sobrenome, $salario) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->setSalario($salario);
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome(string $sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario(float $salario){
        if ($salario <= 0.00)
        {
            $salario = 0.0;
        }
        $this->salario = $salario;
    }

    public function MostrarDados()
    {
        echo "<br>";
        echo "Nome: " . $this->nome;
        echo "<br>";
        echo "Sobrenome: " . $this->sobrenome;
        echo "<br>";
        echo "Salário: R$ " . $this->salario;
        echo "<br>";
    }
    public function mostraSalario()
    {
        echo "Salário Anual: R$ " . $this->salario * 12;
        echo "<br>";
    }
    public function aumentaSalario()
    {
        echo "Novo Salário: R$ " . $this->salario = ($this->salario * 10 / 100) + $this->salario;
    }
    
}

$e1 = new Empregado("Breno", "Premoli", 100.00);
$e1->MostrarDados();
$e1->mostraSalario();
echo "<br>";
$e1->aumentaSalario();
echo "<br>";
$e1->MostrarDados();
$e1->mostraSalario();

?>