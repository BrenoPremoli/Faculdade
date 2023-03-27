using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ComposicaoBanco
{
    public class ContaCorrente
    {
        public double Saldo { get; set; }
        public double ChequeEspecial { get; set; }
        public ContaCorrente(double saldo, double chequeEspecial)
        {
            Saldo = saldo;
            ChequeEspecial = chequeEspecial;
        }
        public void MostrarContaCorrente()
        {
            System.Console.WriteLine("Saldo da Conta Corrente: {0:C}", Saldo);
            System.Console.WriteLine("Valor do Cheque Especial: {0:C}", ChequeEspecial);
        }
    }
}