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
        echo "<br>";
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
        $this->salario = $salario;
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
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario(string $salario){
        $this->salario = $salario;
    }
    public function getDepartamento(){
        return $this->departamento;
    }
    public function setDepartamento(string $departamento){
        $this->departamento = $departamento;
    }
    public function alteraSalario($s){
        $this->salario = (($s / 100) * $this->salario) + $this->salario;
    }
    public function mostrarDadosP()
    {
        parent::mostrarDados();
        echo "Matrícula: " . $this->matricula;
        echo "<br>";
        echo "Carga: " . $this->carga;
        echo "<br>";
        echo "Salário: " . $this->salario;
        echo "<br>";
        echo "Departamento: " . $this->departamento;
        echo "<br>";

    }
}

class Funcionario extends Pessoa {
    private string $matricula;
    private string $regime;
    private float $salario;
    public function __construct(string $cpf, string $nome, string $email, $matricula, $regime, $salario)
    {
        parent::__construct($cpf, $nome, $email);
        $this->matricula = $matricula;
        $this->regime = $regime;
        $this->salario = $salario;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula(string $matricula){
        $this->matricula = $matricula;
    }
    public function getRegime(){
        return $this->regime;
    }
    public function setregime(string $regime){
        $this->regime = $regime;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario(string $salario){
        $this->salario = $salario;
    }
    public function alteraSalario($s){
        $this->salario = (($s / 100) * $this->salario) + $this->salario;
    }
    public function mostrarDadosF()
    {
        parent::mostrarDados();
        echo "<br>";
        echo "Matrícula: " . $this->matricula;
        echo "<br>";
        echo "Regime: " . $this->regime;
        echo "<br>";
        echo "Salário: " . $this->salario;
        echo "<br>";
    }
}

class Aluno extends Pessoa {
    private string $ra;
    private string $curso;
    private int $termo;
    public function __construct(string $cpf, string $nome, string $email, $ra, $curso, $termo){
        parent::__construct($cpf, $nome, $email);
        $this->ra = $ra;
        $this->curso = $curso;
        $this->termo = $termo;
    }
    public function getRa(){
        return $this->ra;
    }
    public function setRa(string $ra){
        $this->ra = $ra;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso(string $curso){
        $this->curso = $curso;
    }
    public function getTermo(){
        return $this->termo;
    }
    public function setTermo(string $termo){
        $this->termo = $termo;
    }
    public function alteraTermo($t)
    {
        $this->termo = $t;
    }
    public function mostrarDadosA()
    {
        parent::mostrarDados();
        echo "<br>";
        echo "RA: " . $this->ra;
        echo "<br>";
        echo "Curso: " . $this->curso;
        echo "<br>";
        echo "Termo: " . $this->termo;
        echo "<br>";
    }
}

$p1 = new Professor("111", "Lara", "lara@gmail.com", "222", 40, 1200.00, "TI");
$p1->mostrarDadosP();
$p1->alteraSalario(100);
$p1->mostrarDadosP();
echo "<br><br>";

$f1 = new Funcionario("333", "sevira", "sevira@gmail.com", "444", "Noite", 2000.00);
$f1->mostrarDadosF();
$f1->alteraSalario(50);
$f1->mostrarDadosF();
echo "<br><br>";

$a1 = new Aluno("555", "Breno", "breno@gmail.com", "666", "ADS", "5");
$a1->mostrarDadosA();
$a1->alteraTermo(6);
$a1->mostrarDadosA();
echo "<br><br>";

?>