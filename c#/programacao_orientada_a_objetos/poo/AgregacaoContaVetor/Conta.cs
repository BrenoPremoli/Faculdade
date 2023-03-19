using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoContaVetor
{
    public class Conta
    {
        public int Numero { get; set; }
        public double Saldo { get; set; }
        public List<Cliente> VetTitular { get; set; } // VetCliente
        public void MostrarConta()
        {
            System.Console.WriteLine("\nNumero: {0}", Numero);
            System.Console.WriteLine("Saldo: {0:C}", Saldo);
        }
    }
}