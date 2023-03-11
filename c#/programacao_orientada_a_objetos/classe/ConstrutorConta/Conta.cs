using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ConstrutorConta
{
    public class Conta
    {
        public int Numero { get; set; }
        public string Titular { get; set; }
        public double Saldo { get; set; }
        public static int Contador { get; set; } // variável de classe
        public Conta(int numero, string titular, double saldo)
        {
            Numero = numero;
            Titular = titular;
            Saldo = saldo;
            Contador = Contador + 1;
        }
        public Conta() // construtor padrão
        {
            // local da lógica
            Contador = Contador + 1;
        }
        public Conta(int numero)
        {
            Numero = numero;
            Contador = Contador + 1;
        }
        static Conta() // executado primeiro
        {
            Contador = 23;
        }
        public void Mostrar()
        {
            System.Console.WriteLine("\nNúmero: {0}", Numero);
            System.Console.WriteLine("Titular: {0}", Titular);
            System.Console.WriteLine("Saldo: {0:C}", Saldo);
            ClasseEstatica.MostrarFrase(); //exemplo de chamada de método de uma classe estática
        }
    }
}