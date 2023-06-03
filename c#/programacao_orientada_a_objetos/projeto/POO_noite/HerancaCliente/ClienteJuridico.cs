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