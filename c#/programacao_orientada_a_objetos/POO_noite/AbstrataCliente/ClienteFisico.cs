using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstrataCliente
{
    public class ClienteFisico : Cliente
    {
        public int Cpf { get; set; }
        public ClienteFisico(int c, string n, int cpf)
        : base(c, n)
        {
            Cpf = cpf;
        }
        public override void Mostrar()
        {
            Console.WriteLine("Código: " + Codigo + "\tNome: "+
            Nome + "\tCpf: " + Cpf);
        }
    }
}