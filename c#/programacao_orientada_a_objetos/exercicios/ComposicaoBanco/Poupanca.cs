using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ComposicaoBanco
{
    public class Poupanca
    {
        public double SaldoPoupanca { get; set; }
        public Poupanca(double saldoPoupanca)
        {
            SaldoPoupanca = saldoPoupanca;
        }
        public void MostrarPoupanca()
        {
            System.Console.WriteLine("Saldo da poupança: {0:C}", SaldoPoupanca);
        }
    }
}