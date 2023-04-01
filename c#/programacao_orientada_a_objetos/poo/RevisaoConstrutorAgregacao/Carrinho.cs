using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RevisaoConstrutorAgregacao
{
    public class Carrinho
    {
        public List<Produto> Itens {get; set;}
        public void ExibeDados()
        {
            foreach (Produto p in Itens)
            {
                p.ExibeDados();
            }
        }
    }
}