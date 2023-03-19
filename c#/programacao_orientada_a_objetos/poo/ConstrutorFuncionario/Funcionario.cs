using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ConstrutorFuncionario
{
    public class Funcionario
    {
        public int Codigo { get; set; }
        public string Nome { get; set; }
        public double Salario { get; set; }
        public static int Contador { get; set; }
        public Funcionario() // construtor padrão
        {
            Contador++;
        }
        public Funcionario(double salario)
        {
            Salario = salario;
            Contador++;
        }
        public Funcionario(int codigo, string nome)
        {
            Codigo = codigo;
            Nome = nome;
            Contador++;
        }
        public Funcionario(int codigo, string nome, double salario)
        {
            Codigo = codigo;
            Nome = nome;
            Salario = salario;
            Contador++;
        }
        public void Mostrar()
        {
            System.Console.WriteLine("\nCodigo: {0}", Codigo);
            System.Console.WriteLine("Nome: {0}", Nome);
            System.Console.WriteLine("Salario: {0:C}", Salario);
        }
    }
}