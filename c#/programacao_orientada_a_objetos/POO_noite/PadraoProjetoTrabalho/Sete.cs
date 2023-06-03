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
            return orcamento.Valor * 0.07;
        }
    }
}