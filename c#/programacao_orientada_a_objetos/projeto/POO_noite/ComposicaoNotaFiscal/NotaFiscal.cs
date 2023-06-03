using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ComposicaoNotaFiscal
{
    public class NotaFiscal
    {
        public int NumeroNf { get; set; }
        public string Data { get; set; }
        public List<ItemNf> VetItem { get; set; }

        public NotaFiscal(int n, string d, 
        List<ItemNf> vItens )
        {
            NumeroNf = n;
            Data = d;
            VetItem = vItens;            
        }
        ~NotaFiscal()//destrutor
        {
            VetItem = null;
            Console.WriteLine("Destruindo a nota fiscal");
        }
    }
}