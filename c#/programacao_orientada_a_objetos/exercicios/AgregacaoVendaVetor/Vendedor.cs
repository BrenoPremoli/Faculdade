using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoVendaVetor
{
    public class Vendedor
    {
        public double Comissao { get; set; }
        public string Nome { get; set; }
        public Vendedor()
        {
        }
        public Vendedor(string nome, double comissao)
        {
            Nome = nome;
            Comissao = comissao;
        }
        public void MostrarVendedor()
        {
            System.Console.WriteLine("VENDEDOR: {0}", Nome);
            System.Console.WriteLine("Comissão: {0:C}\n", Comissao);
        }
    }
}