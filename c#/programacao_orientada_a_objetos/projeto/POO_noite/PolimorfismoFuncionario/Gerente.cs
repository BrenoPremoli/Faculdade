using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PolimorfismoFuncionario
{
    public class Gerente : Funcionario
    {
        public Gerente(int c, string n, double s)
        : base(c, n, s)
        {}
        public override double CalcularBonificacao()
        {
            return Salario * 15 / 100;
        }        
    }
}