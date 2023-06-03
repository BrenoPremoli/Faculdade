using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstratoFuncionario
{
    public class Assalariado : Funcionario
    {
        public Assalariado(int c, string n, double s)
        : base(c, n, s)
        {            
        }   
        public override double CalcularSalario(int diasUteis)
        {
            return Salario = Salario / 30 * diasUteis;
        }
    }
}