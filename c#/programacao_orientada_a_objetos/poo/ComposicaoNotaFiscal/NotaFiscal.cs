using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ComposicaoNotaFiscal
{
    public class NotaFiscal
    {
        public int NumeroNotaFiscal { get; set; }
        public string Data { get; set; }
        public List<ItemNotaFiscal> VetItem { get; set; }
        public NotaFiscal(int numero, string data, List<ItemNotaFiscal> vItens)
        {
            NumeroNotaFiscal = numero;
            Data = data;
            VetItem = vItens;
        }
        ~NotaFiscal() //destrutor
        {
            VetItem = null; 
            System.Console.WriteLine("Destruindo a nota fiscal.");
        }
    }
}