using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstrataFuncionario
{
    public abstract class Funcionario
    {
        public int Codigo { get; set; }
        public string Nome { get; set; }
        public double Salario { get; set; }
        public List<Dependente> VetDependente { get; set; }
        public Funcionario(int codigo, string nome, double salario)
        {
            Codigo = codigo;
            Nome = nome;
            Salario = salario;
            VetDependente = new List<Dependente>();
        }
        public abstract double CalcularSalario(int diasUteis);
        public int CalcularTotalDependente()
        {
            return VetDependente.Count;
        }
        public void AdicionarDependente(Dependente d)
        {
            VetDependente.Add(d);
        }
        public void RemoverDependenteMaioridade()
        {
            for(int i = 0; i < VetDependente.Count; i++)
            {
                Dependente d = VetDependente.ElementAt<Dependente>(i); // ElementAt - pegar os elementos do índice -> (i)
                if (d.VerificarMaioridade() == true)
                    VetDependente.Remove(d);
            }
        }
        public void ListarDependente()
        {
            System.Console.WriteLine($"\nLista de dependentes do funcionário: {Nome}");
            for(int i = 0; i < VetDependente.Count; i++)
            {
                Dependente d = VetDependente.ElementAt<Dependente>(i); // ElementAt - pegar os elementos do índice -> (i)
                System.Console.Write($"\nCódigo: {d.Codigo}\t");
                System.Console.Write($"Nome: {d.Nome}\t");
                System.Console.Write($"Idade: {d.Idade}");
            }
        }
        public virtual void Mostrar()
        {
            System.Console.Write($"\nCódigo: {Codigo}\t");
            System.Console.Write($"Nome: {Nome}\t");
            System.Console.Write($"Salário: {Salario:C}\t");
        }
    }
}