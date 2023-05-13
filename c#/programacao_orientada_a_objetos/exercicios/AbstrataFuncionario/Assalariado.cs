using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstrataFuncionario
{
    public class Assalariado : Funcionario
    {
        public Assalariado(int codigo, string nome, double salario) : base(codigo, nome, salario)
        {         
        }
        public override double CalcularSalario(int diasUteis)
        {
            return Salario = Salario / 30 * diasUteis;
        }
    }
}