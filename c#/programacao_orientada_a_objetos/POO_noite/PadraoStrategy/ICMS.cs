using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PadraoStrategy
{
    public class ICMS : Imposto
    {
        /* Sem o uso de implementação da interface
        public double CalculaICMS(Orcamento orcamento)
        {
            return orcamento.Valor * 0.18;
        } */
        public double Calcula(Orcamento orcamento)
        {
            return orcamento.Valor * 0.18;
        }
    }
}