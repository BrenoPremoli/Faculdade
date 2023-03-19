using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ArrayProduto
{
    public class Produto
    {
        private int codigo;
        private double preco;
        private string nome;
        public void Mostrar()
        {
            System.Console.WriteLine("Código: {0}", Codigo);
            System.Console.WriteLine("Nome: {0}", Nome);
            System.Console.WriteLine($"Preço: {Preco:C}\n");
        }
        public int Codigo
        {
            get { return codigo; }
            set { codigo = value; }
        }
        public string Nome
        {
            get { return nome; }
            set { nome = value; }
        }
        public double Preco
        {
            get { return preco; }
            set { preco = value; }
        }
    }
}