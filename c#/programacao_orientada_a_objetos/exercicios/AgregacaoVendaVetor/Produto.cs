using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoVendaVetor
{
    public class Produto
    {
        private double preco;
        public string Nome { get; set; }
        public int Tamanho { get; set; }
        public double Preco
        {
            set
            {
                if (value > 0)
                {
                    this.preco = value;
                }
                else
                    System.Console.WriteLine("\nPREÇO de {0} deve ser maior que 0.", Nome);
            }
            get
            {
                return this.preco;
            }
        }
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