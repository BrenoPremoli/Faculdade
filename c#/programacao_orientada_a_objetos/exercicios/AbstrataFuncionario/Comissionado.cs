using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstrataFuncionario
{
    public class Comissionado : Funcionario
    {
        public double Porcentagem { get; set; }
        public Comissionado(int codigo, string nome, double salario, double porcentagem) : base(codigo, nome, salario)
        {
            Porcentagem = porcentagem;
        }
        public override double CalcularSalario(int diasUteis)
        {
            return Salario += Salario / 30 * diasUteis * Porcentagem;
        }
        public override void Mostrar()
        {
            base.Mostrar();
            System.Console.WriteLine($"Porcentagem: {Porcentagem:N}%");
        }
    }
}