using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ArrayConta
{
    public class Conta
    {
        //declaração de atributos
        public int numero;
        public string titular = "";
        public double saldo;
        //declaração dos métodos/funções
        public void MostrarAtributos(){
            System.Console.WriteLine("\nNúmero: " + numero);
            System.Console.WriteLine("Titular: " + titular);
            System.Console.WriteLine($"Saldo: {saldo:C}");
        }
    }
}