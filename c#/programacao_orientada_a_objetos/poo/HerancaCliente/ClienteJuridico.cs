using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaCliente
{
    public class ClienteJuridico : Cliente
    {
        private int cnpj;
        private int ie;
        public ClienteJuridico()
        {
        }
        public ClienteJuridico(int codigo, string nome, string endereco, int cnpj, int ie) : base(codigo, nome, endereco)
        {
            Cnpj = cnpj;
            Ie = ie;
        }
        public int Cnpj
        {
            get { return cnpj; }
            set { cnpj = value; }
        }
        public int Ie
        {
            get { return ie; }
            set { ie = value; }
        }
    }
}