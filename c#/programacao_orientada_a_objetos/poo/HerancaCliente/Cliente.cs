using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaCliente
{
    public class Cliente // classe base
    {
        protected int codigo;
        protected string nome;
        protected string endereco;
        public Cliente()
        {
        }
        public Cliente(int codigo, string nome, string endereco)
        {
            Codigo = codigo;
            Nome = nome;
            Endereco = endereco;
        }
        public void Mostrar()
        {
            System.Console.WriteLine("Código: " + Codigo);
            System.Console.WriteLine("Nome: " + Nome);
            System.Console.WriteLine("Endereço: " + Endereco);
        }
        public int Codigo
        {
            get { return codigo; }
            set { codigo = value; }
        }

        public string Nome
        {
            get { return nome; }
            set { nome = value; }
        }

        public string Endereco
        {
            get { return endereco; }
            set { endereco = value; }
        }

    }
}