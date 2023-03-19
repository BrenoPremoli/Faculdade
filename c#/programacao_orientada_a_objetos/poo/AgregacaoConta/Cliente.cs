using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoConta
{
    public class Cliente
    {
        public string Nome { get; set; }
        public int Cpf { get; set; }
        public int Rg { get; set; }
        public Endereco _Endereco { get; set; }
        public Cliente(string nome, int cpf, int rg) // construtor
        {
            Nome = nome;
            Cpf = cpf;
            Rg = rg;
        }
        public Cliente() // construtor padrão (sem parâmetro)
        {
        }
        public void MostrarCliente()
        {
            System.Console.WriteLine("Nome: {0}", Nome);
            System.Console.WriteLine("CPF: {0}", Cpf);
            System.Console.WriteLine("RG: {0}", Rg);
            _Endereco.MostrarEndereco();
        }
    }
}