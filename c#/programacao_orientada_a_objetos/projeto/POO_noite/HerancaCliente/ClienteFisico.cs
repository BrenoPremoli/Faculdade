using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaCliente
{//            classe derivada : classe base
    public class ClienteFisico : Cliente
    {
        private int cpf;
        private int rg;
        public ClienteFisico()
        {        }
        public ClienteFisico(int codigo, string nome, string endereco,
        int cpf, int rg) : base(codigo, nome, endereco)
        {
            Cpf = cpf;
            Rg = rg;
        }
        public int Cpf
        {
            get { return cpf; }
            set { cpf = value; }
        }
        public int Rg
        {
            get { return rg; }
            set { rg = value; }
        }
        public void Mostrar()
        {
            base.Mostrar();
            Console.WriteLine("Cpf: " + Cpf + "\tRg: " + Rg);
        }
    }
}