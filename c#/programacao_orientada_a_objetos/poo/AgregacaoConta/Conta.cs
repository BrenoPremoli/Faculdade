using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoConta
{
    public class Conta
    {
        public int Numero { get; set; }
        public Cliente Titular { get; set; } // construtor "Cliente" (agregação)
        public double Saldo { get; set; }
        public void MostrarConta() // mostrar classe conta
        {
            System.Console.WriteLine("\nNumero: {0}", Numero);
            System.Console.WriteLine("Saldo: {0:C}", Saldo);
            Titular.MostrarCliente(); // mostrar classe cliente
        }
    }
}