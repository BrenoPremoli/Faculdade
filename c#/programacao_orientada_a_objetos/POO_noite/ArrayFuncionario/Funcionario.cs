using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ArrayFuncionario
{
    public class Funcionario
    {
        public int codigo;
        public string nome;
        public double salario;
        public void MostrarAtributos(){
            Console.WriteLine($"Código: {codigo} \tNome: {nome} \tSalário {salario:C}");
        }
        public void CalcularAumento(double porcentagem)
        {
            if (salario < 300)
                salario = salario + salario * porcentagem / 100;
        }
    }
}