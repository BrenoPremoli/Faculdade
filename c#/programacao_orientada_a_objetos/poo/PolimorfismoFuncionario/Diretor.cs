using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PolimorfismoFuncionario
{
    public class Diretor : Funcionario
    {
        public Diretor(int codigo, string nome, double salario) : base(codigo, nome, salario)
        {
        }
        public override double CalcularBonificacao()
        {
            return base.CalcularBonificacao() + 1000;
        }
    }
}