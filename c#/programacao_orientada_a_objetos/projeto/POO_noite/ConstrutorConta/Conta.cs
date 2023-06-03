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
        public static int Contador { get; set; }
        public Conta(int n, string t, double s)
        {
            Numero = n;
            Titular = t;
            Saldo = s;
            Contador = Contador + 1;
        }
        public Conta() // construtor padrão
        {
            //local da lógica
            Contador = Contador + 1;
        }
        public Conta(int numero)
        {
            Numero = numero;
            Contador = Contador + 1;
        }
        static Conta()
        {
            Contador = 20;
        }

        public void Mostrar()
        {
            Console.WriteLine("Número " + Numero +
            "\tTitular: " + Titular + "\tSaldo: " + Saldo);
            ClasseEstat.MostrarFrase();//exemplo de chamada de método de uma classe estática
        }
    }
}