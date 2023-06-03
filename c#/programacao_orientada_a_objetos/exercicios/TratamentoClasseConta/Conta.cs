using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ClasseConta
{
    public class Conta
    {
        //declaração de atributos
        public double saldo;
        //declaração dos métodos/funções
        public void MostrarAtributos()
        {
            System.Console.WriteLine($"Saldo: {saldo:C}");
        }
        public void Depositar(double valorDeposito)
        {
            if (valorDeposito < 1)
            {
                throw new ArgumentException();
            }
            else
            {
                saldo += valorDeposito;
            }    
        }
    }
}