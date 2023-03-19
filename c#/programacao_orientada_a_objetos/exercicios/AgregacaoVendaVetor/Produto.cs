using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoVendaVetor
{
    public class Produto
    {
        public string Nome { get; set; }
        public double Preco { get; set; }
        public int Tamanho { get; set; }
        public Produto()
        {
            
        }
        public Produto(string nome, double preco, int tamanho)
        {
            Nome = nome;
            Preco = preco;
            Tamanho = tamanho;
        }
        public void MostrarProduto()
        {
            System.Console.WriteLine("Nome: {0}", Nome);
            System.Console.WriteLine("Preço: {0:C}", Preco);
            System.Console.WriteLine("Tamanho: {0}\n", Tamanho);
        }
    }
}