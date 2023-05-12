using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaPolimorfismoFuncionario
{
    public class Funcionario
    {
        public int Codigo { get; set; }
        public string Nome { get; set; }
        public double Salario { get; set; }
        public Funcionario(int codigo, string nome, double salario)
        {   
            Codigo = codigo;
            Nome = nome;
            Salario = salario;
        }
        public virtual void Mostrar()
        {
            System.Console.WriteLine($"\nCódigo: {Codigo}");
            System.Console.WriteLine($"Nome: {Nome}");
            System.Console.WriteLine($"Salário: {Salario:C}");
        }
        public virtual double CalcularSalario()
        {
            return Salario;
        }
    }
}