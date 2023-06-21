using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PadraoProjetoTrabalho
{
    public class Dez : Desconto
    {
        public double Calcula(Orcamento orcamento)
        {
            if (orcamento.Itens.Count > 5)
            {
                return orcamento.Valor * 0.1;
            }
            return 0;
        }
    }
}