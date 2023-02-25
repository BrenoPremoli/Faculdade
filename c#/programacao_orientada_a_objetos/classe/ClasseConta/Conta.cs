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
        public string titular = "";
        public double saldo;
        //declaração dos métodos/funções
        public void Aplicacao(double porcentagem)
        {
            saldo = saldo + (saldo * porcentagem / 100);
        }
        public bool Transferir(double valorTransferir, Conta objContaDestino)
        {
            if (saldo >= valorTransferir)
            {
                saldo = saldo - valorTransferir;
                objContaDestino.saldo = objContaDestino.saldo + valorTransferir; // objContaDestino.saldo += valorTransferir;
                return true;
            }
            return false;
        }
        public void MostrarAtributos(){
            System.Console.WriteLine("\nNúmero: " + numero);
            System.Console.WriteLine("Titular: " + titular);
            System.Console.WriteLine("Saldo: " + saldo);
        }
        public void Sacar(double valorSaque)
        {
            saldo = saldo - valorSaque;
        }
        public void Depositar(double valorDeposito)
        {
            saldo += valorDeposito;
        }
    }
}