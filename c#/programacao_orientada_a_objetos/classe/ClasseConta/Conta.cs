using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ClasseConta
{
    public class Conta
    {
        //declaração de atributos
        public int numero;
        public string titular;
        public double saldo;
        //declaração dos métodos/funções
        public void MostrarAtributos(){
            System.Console.WriteLine("\nNúmero: " + numero);
            System.Console.WriteLine("Titular: " + titular);
            System.Console.WriteLine("Saldo: " + saldo);
        }
        public void Sacar()
        {

        }
        public void Depositar(double valor)
        {
            saldo = saldo + valor;
        }
        public void Transferir(double valor, Conta c)
        {
            if (valor > saldo)
            {
                System.Console.WriteLine("\nSaldo Insuficiente.");
            }
            else
            {
            saldo = saldo - valor;
            c.Depositar(valor);
            }
        }
    }
}