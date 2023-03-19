using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoConta
{
    public class Conta
    {
        public int Numero { get; set; }
        public Cliente Titular { get; set; }
        public double Saldo { get; set; }
        public void Mostrar()//classe Conta
        {
            Console.WriteLine("Número: " + Numero + 
            "\tSaldo: "+ Saldo);
            Titular.Mostrar();//classe Cliente
        }
    }
}