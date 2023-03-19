using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ArrayFuncionario
{
    public class Funcionario
    {
        public int codigo;
        public string nome = "";
        public double salario;
        public void MostrarDados()
        {
        System.Console.WriteLine("\nCódigo: {0}", codigo);
        System.Console.WriteLine("Nome: {0}", nome);
        System.Console.WriteLine($"Salário: {salario:C}");
        }
        public void Aumentar()
        {
            salario = salario + (salario * 10 / 100);
        }
    }
}