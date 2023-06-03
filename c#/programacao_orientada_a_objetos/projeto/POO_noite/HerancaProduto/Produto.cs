using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaProduto
{
    public class Produto
    {
        public int Codigo { get; set; }
        public string Nome { get; set; }
        public double Preco { get; set; }

        public Produto(int c, string n, double p)
        {
            Codigo = c;
            Nome = n;            
            Preco = p;
        }
        public virtual void Mostrar()
        {
            Console.WriteLine($"Código: {Codigo} - Nome: {Nome} - Preço {Preco:C}");
        }
    }
}