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
        public string titular;
        public double saldo;
        //declaração dos métodos/funções
        public void MostrarAtributos(){
            Console.WriteLine($"Número: {numero} \tTitular: {titular} \tSaldo {saldo:C}");
        }
    }
}