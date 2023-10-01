<?php

class Data
{
    private int $dia;
    private int $mes;
    private int $ano;
    public function __construct($dia, $mes, $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;

        $diasMes = [
            1 => 31, 
            2 => 28, 
            3 => 31, 
            4 => 30, 
            5 => 31, 
            6 => 30, 
            7 => 31, 
            8 => 31, 
            9 => 30, 
            10 => 31, 
            11 => 30, 
            12 => 31
            ];
            
        if ($this->mes< 1 || $this->mes > 12) {
            echo "Mês Inválido - (" . $this->mes . ") - ";
            echo $this->dia . "/" . $this->mes . "/" . $this->ano;
        }

        elseif ($this->ano<= 0 || $this->ano > 2023) {
            echo "Ano Inválido - (" . $this->ano . ") -";
            echo $this->dia . "/" . $this->mes . "/" . $this->ano;
        }

        elseif ($this->dia < 1 || $this->dia > $diasMes[$this->mes]) {
            echo "Dia Inválido - (" . $this->dia . ") - ";
            echo $this->dia . "/" . $this->mes . "/" . $this->ano;
        }
    }

    public function getMes(){
        return $this->mes;
    }
    public function setMes(int $mes){
        $this->mes = $mes;
    }
    public function getAno(){
        return $this->ano;
    }
    public function setAno(int $ano){
        $this->ano = $ano;
    }
    public function getDia(){
        return $this->dia;
    }
    public function setDia(int $dia){
        $this->dia = $dia;
    }
    
    public function avancar() {
        if ($this->mes == 4 || $this->mes == 6 || $this->mes == 9 || $this->mes == 11) {
            $ultimo = 30;
        } elseif ($this->mes == 2) {
            $ultimo = 28;
        } else {
            $ultimo = 31;
        }
        if ($this->dia < $ultimo) {
            $this->dia++;
        } 
        else {
            $this->dia = 1;
            if ($this->mes < 12) {
                $this->mes++;
            } else {
                $this->mes = 1;
                $this->ano++;
            }
        }
    }
    public function date()
    {
        echo $this->dia . "/" . $this->mes . "/" . $this->ano . "<br>";
    }
}

$d1 = new Data(31, 12, 2011); 
$d1->date();
$d1->avancar();
$d1->date();

echo "<br>";
$d2 = new Data(31, 2, 2023);
echo "<br>";
$d2 = new Data(28, 22, 2023);
echo "<br>";
$d2 = new Data(28, 22, 2024);

echo "<br><br>";
$d3 = new Data(31, 07, 2022); 
$d3->date();
$d3->avancar();
$d3->date();

?>