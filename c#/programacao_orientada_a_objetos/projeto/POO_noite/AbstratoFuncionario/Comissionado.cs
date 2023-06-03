using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstratoFuncionario
{
    public class Comissionado : Funcionario
    {
        public double Porcentagem { get; set; }
        public Comissionado(int c, string n, double s, double p)
        : base(c, n, s)
        {
            Porcentagem = p;
        }
        public override double CalcularSalario(int diasUteis)
        {
            return Salario += Salario / 30 * diasUteis * Porcentagem;
        }
        public override void Mostrar()
        {
            base.Mostrar();
            Console.WriteLine($"Porcentagem {Porcentagem:N}%" );
        }
    }
}