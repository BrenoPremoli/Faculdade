<?php

abstract class Pessoa{
    protected string $cpf;
    protected string $nome;
    protected string $email;

    public function __construct($cpf, $nome, $email)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function mostrarDados(){
        echo "CPF: " . $this->cpf;
        echo "<br>";
        echo "Nome: " . $this->nome;
        echo "<br>";
        echo "E-mail: " . $this->email;
    }
}

class Professor extends Pessoa {
    private string $matricula;
    private int $carga;
    private float $salario;
    private string $departamento;
    public function __construct(string $cpf, string $nome, string $email, $matricula, $carga, $salario, $departamento)
    {
        parent::__construct($cpf, $nome, $email);
        $this->matricula = $matricula;
        $this->carga = $carga;
        $this->departamento = $departamento;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula(string $matricula){
        $this->matricula = $matricula;
    }
    public function getCarga(){
        return $this->carga;
    }
    public function setCarga(string $carga){
        $this->carga = $carga;
    }
    public function getDepartamento(){
        return $this->departamento;
    }
    public function setDepartamento(string $departamento){
        $this->departamento = $departamento;
    }
    public function alteraSalario($s){
        $this->salario = ($s * $this->salario) + $this->salario;
    }
}

class Funcionario extends Pessoa {
    private string $matricula;
    private string $regime;
    private float $salario;
    public function __construct(string $cpf, string $nome, string $email, $matricula, $regime, $salario){
        parent::__construct($cpf, $nome, $email);
        $this->matricula;
        $this->$regime;
        $this->$salario;
    }
    public function alteraSalario($s){
        $this->salario = ($s * $this->salario) + $this->salario;
    }
}

class Aluno extends Pessoa {
    private string $ra;
    private string $curso;
    private int $termo;
    public function __construct(string $cpf, string $nome, string $email, $ra, $curso, $termo){
        parent::__construct($cpf, $nome, $email);
        $this->ra;
        $this->$curso;
        $this->$termo;
    }
    public function alteraTermo($t)
    {
        $this->termo = $t;
    }
}

$a1 = new Aluno("111", "Breno", "breno@gmail.com", "555", "ADS", "5");
$a1->mostrarDados();

?>