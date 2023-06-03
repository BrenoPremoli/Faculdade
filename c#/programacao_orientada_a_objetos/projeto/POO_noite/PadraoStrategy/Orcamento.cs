using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PadraoStrategy
{
    public class Orcamento
    {
        public double Valor { get; private set; }
        public Orcamento(double valor)
        {
            Valor = valor;
        }
    }
}