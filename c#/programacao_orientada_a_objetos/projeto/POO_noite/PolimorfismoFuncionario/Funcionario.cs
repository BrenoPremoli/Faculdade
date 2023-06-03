using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PolimorfismoFuncionario
{
    public class Funcionario
    {
        public int Codigo { get; set; }
        public string Nome { get; set; }
        public double Salario { get; set; }
        public Funcionario(int c, string n, double s)
        {
            Codigo = c;
            Nome = n;
            Salario = s;
        }
        public virtual double CalcularBonificacao()
        {
            return Salario * 10 / 100;
        }
    }
}