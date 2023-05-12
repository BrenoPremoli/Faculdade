using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaProduto
{
    public class Produto
    {
        protected int codigo;
        protected string nome;
        protected float preco;
        public Produto()
        {
        }
        public Produto(int codigo, string nome, float preco)
        {
            Codigo = codigo;
            Nome = nome;
            Preco = preco;
        }
        public virtual void Mostrar()
        {
            System.Console.WriteLine($"Código: {Codigo}");
            System.Console.WriteLine($"Nome: {Nome}");
            System.Console.WriteLine($"Preço: {Preco:c}\n");
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
        public float Preco
        {
            get { return preco; }
            set { preco = value; }
        }
    }
}