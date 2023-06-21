using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PadraoProjetoTrabalho
{
    public class Sete : Desconto
    {
        public double Calcula(Orcamento orcamento)
        {
            if (orcamento.Valor > 500)
            {
            return orcamento.Valor * 0.07;
            }
            return 0;
        }
    }
}