using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ClasseFuncionario
{
    public class Funcionario
    {
        public int codigo;
        public string nome = "";
        public double salario;
        public void MostrarDados()
        {
        System.Console.WriteLine("Código: {0}", codigo);
        System.Console.WriteLine("Nome: {0}", nome);
        System.Console.WriteLine("Salário: {0}", salario);
        }
    }
}