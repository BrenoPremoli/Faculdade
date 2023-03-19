using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoContaVetor
{
    public class Cliente
    {
        public string Nome { get; set; }
        public int Cpf { get; set; }
        public int Rg { get; set; }
        public Cliente(string nome, int cpf, int rg)
        {
            Nome = nome;
            Cpf = cpf;
            Rg = rg;
        }
        public void MostrarCliente()
        {
            System.Console.WriteLine("\nNome: {0}", Nome);
            System.Console.WriteLine("CPF: {0}", Cpf);
            System.Console.WriteLine("RG: {0}", Rg);
        }      
    }
}