using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PolimorfismoFuncionario
{
    public class Secretario : Funcionario
    {
        public int NumeroSecretario { get; set; }
        public Secretario(int c, string n, double s, int ns)
        : base(c, n, s)
        {
            NumeroSecretario = ns;
        }
        
    }
}