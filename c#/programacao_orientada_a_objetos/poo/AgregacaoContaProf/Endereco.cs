using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoConta
{
    public class Endereco
    {
        public string Logradouro { get; set; }
        public int Numero { get; set; }
        public string Bairro { get; set; }
        public string Cidade { get; set; }
        public Endereco(string l, int n, string b, string c)
        {
            Logradouro = l;
            Numero = n;
            Bairro = b;
            Cidade = c;
        }
        public void MostrarEndereco()
        {
            Console.WriteLine("Logradouro: " + Logradouro +
            "\tNúmero: " + Numero + "\tBairro: " + Bairro +
            "\tCidade: " + Cidade);
        }
    }
}