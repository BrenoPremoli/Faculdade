using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ConstrutorFuncionario
{
    public class Funcionario
    {
        public static int Codigo { get; set; }
        public static int Contador { get; set; }
        private string nome;
        private double salario;
        public string Nome 
        { 
            set
            {
                this.nome = value;
            } 
            get
            {
                return nome;
            }
        }
        public double Salario
        {
            get { return salario; }
            set { salario = value; }
        }
        public Funcionario() // construtor padrão
        {
            Contador++;
            Codigo++;
        }
        public Funcionario(double salario)
        {
            Salario = salario;
            Contador++;
            Codigo++;
        }
        public Funcionario(string nome)
        {
            Nome = nome;
            Contador++;
            Codigo++;
        }
        public Funcionario(string nome, double salario)
        {
            Nome = nome;
            Salario = salario;
            Contador++;
            Codigo++;
        }
        static Funcionario()
        {
            Codigo = 100;
        }
        public void Mostrar()
        {
            System.Console.WriteLine("\nCodigo: {0}", Codigo);
            System.Console.WriteLine("Nome: {0}", Nome);
            System.Console.WriteLine("Salario: {0:C}", Salario);
        }

        public void Aumentar(double porcentagem)
        {
            Salario = (Salario * (porcentagem / 100)) + Salario;
        }
    }
}