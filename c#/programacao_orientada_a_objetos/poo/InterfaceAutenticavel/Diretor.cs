using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace InterfaceAutenticavel
{
    public class Diretor : Funcionario, IAutenticavel
    {
        public string Nome { get; set; }
        public int Senha { get; set; }
        public bool Autenticar(int s)
        {
            return Senha == s ? true : false;
        }
    }
}