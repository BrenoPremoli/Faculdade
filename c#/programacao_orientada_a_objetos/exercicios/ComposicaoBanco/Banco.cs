using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ComposicaoBanco
{
    public class Banco
    {
        public List<ContaCorrente> VetConta { get; set; }
        public List<Poupanca> VetPoupanca { get; set; }
        public Banco(List<ContaCorrente> vetConta,List<Poupanca> vetPoupanca)
        {
            VetConta = vetConta;
            VetPoupanca = vetPoupanca;
        }
    }
}