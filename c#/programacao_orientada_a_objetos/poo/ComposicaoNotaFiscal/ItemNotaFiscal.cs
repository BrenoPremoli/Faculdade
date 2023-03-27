using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ComposicaoNotaFiscal
{
    public class ItemNotaFiscal
    {
        public int Quantidade { get; set; }
        public ItemNotaFiscal(int quantidade)
        {
            Quantidade = quantidade;
        }
        ~ItemNotaFiscal() //destrutor
        {
            System.Console.WriteLine("Destruindo o item nota fiscal.");
        }
    }
}