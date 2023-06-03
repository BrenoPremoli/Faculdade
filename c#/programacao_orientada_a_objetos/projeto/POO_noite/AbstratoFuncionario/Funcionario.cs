using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstratoFuncionario
{
    public abstract class Funcionario
    {
        public int Codigo { get; set; }
        public string Nome { get; set; }
        public double Salario { get; set; }
        public abstract double CalcularSalario(int diasUteis);
        public virtual void Mostrar()
        {
            Console.WriteLine($"Código: {Codigo} \tNome: {Nome} \tSalário: {Salario:C}");
        }
        public Funcionario(int c, string n, double s)
        {
            Codigo = c;
            Nome = n;
            Salario = s;
        }        
    }
}