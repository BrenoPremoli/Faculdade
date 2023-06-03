using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PolimorfismoFuncionario
{
    public class Diretor : Funcionario
    {
        public Diretor(int c, string n, double s)
        : base(c, n, s)
        {}
        public override double CalcularBonificacao()
        {
            return base.CalcularBonificacao() + 1000;
        }
    }
}