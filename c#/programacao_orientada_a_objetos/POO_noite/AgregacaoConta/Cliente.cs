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
        public Cliente(string n, int c, int r)
        {
            Nome = n;
            Cpf = c;
            Rg = r;
        }
        public Cliente()
        {            
        }
        public void Mostrar()
        {
            Console.WriteLine("Nome: " + Nome + "\tCpf: "
            + Cpf + "\tRg: " + Rg);
            _Endereco.MostrarEndereco();
        }
    }
}