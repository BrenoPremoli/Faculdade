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
        public Endereco(string logradouro, int numero, string bairro, string cidade)
        {
            Logradouro = logradouro;
            Numero = numero;
            Bairro = bairro;
            Cidade = cidade;
        }
        public Endereco()
        {
        }
        public void MostrarEndereco()
        {
        System.Console.WriteLine("Logradouro: {0}", Logradouro);
        System.Console.WriteLine("Numero: {0}", Numero);
        System.Console.WriteLine("Bairro: {0}", Bairro);
        System.Console.WriteLine("Cidade: {0}", Cidade);
        }
    }
}