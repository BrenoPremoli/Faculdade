using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PadraoProjetoTrabalho
{
    public class Orcamento
    {
        public double Valor { get; private set; }
        public List<Item> Itens {get; private set;}
        public Orcamento(double valor)
        {
            Valor = valor;
            Itens = new List<Item>();
        }
        public void AdicionaItens(Item item)
        {
            Itens.Add(item);
        }
    }
}