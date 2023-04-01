using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ComposicaoBanco
{
    public class Banco
    {
        public string Nome { get; set; }
        public List<ContaCorrente> VetConta { get; set; }
        public List<Poupanca> VetPoupanca { get; set; }
        public Banco(string nome, List<ContaCorrente> vetConta,List<Poupanca> vetPoupanca)
        {
            Nome = nome;
            VetConta = vetConta;
            VetPoupanca = vetPoupanca;
        }
        public void ListarDados()
        {
            foreach(ContaCorrente b in VetConta)
            {
                b.MostrarContaCorrente();
            }
            foreach(Poupanca p in VetPoupanca)
            {
                p.MostrarPoupanca();
            }
        }
    }
}