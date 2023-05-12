using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PolimorfismoFuncionario
{
    public class Secretario : Funcionario
    {
        public int NumeroSecretario { get; set; }
        public Secretario(int codigo, string nome, double salario, int numeroSecretario) : base(codigo, nome, salario)
        {
            NumeroSecretario = numeroSecretario;
        }
    }
}