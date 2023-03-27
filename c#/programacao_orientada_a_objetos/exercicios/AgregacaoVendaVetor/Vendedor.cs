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
            System.Console.Write("VENDEDOR: {0}\t\t", Nome);
            System.Console.WriteLine("Comissão: {0}%\n", Comissao);
        }
    }
}