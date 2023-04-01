using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RevisaoComposicao
{
    public class Contatos
    {
        public string Nome { get; set; }
        public string Email { get; set; }
        public string Telefone { get; set; }
        public Contatos(string n, string e, string t)
        {
            Nome = n;
            Email = e;
            Telefone = t;
        }
        public void ListarContatos()
        {
            System.Console.WriteLine("Nome: {0}", Nome);
            System.Console.WriteLine("Email: {0}", Email);
            System.Console.WriteLine("Telefone: {0}\n", Telefone);
        }
    }
}