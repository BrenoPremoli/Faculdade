using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstrataFuncionario
{
    public class Departamento
    {
        public int Codigo { get; set; }
        public string Descricao { get; set; }
        public List<Funcionario> VetFuncionario { get; set; }
        public Departamento(int codigo, string descricao)
        {
            Codigo = codigo;
            Descricao = descricao;
            VetFuncionario = new List<Funcionario>();
        }
        public void Admitir(Funcionario f)
        {
            VetFuncionario.Add(f);
        }
        public void DemitirFuncionario(int codigo)
        {
            for(int i = 0; i < VetFuncionario.Count; i++)
            {
                Funcionario f = VetFuncionario.ElementAt<Funcionario>(i); // ElementAt - pegar os elementos do índice -> (i)
                if (f.Codigo == codigo)
                    VetFuncionario.Remove(f);
            }
        }
        public void ListarFuncionario()
        {
            System.Console.WriteLine($"\nLista de funcionários do departamento departamento: {Descricao}");
            for(int i = 0; i < VetFuncionario.Count; i++)
            {
                Funcionario f = VetFuncionario.ElementAt<Funcionario>(i); // ElementAt - pegar os elementos do índice -> (i)
                f.Mostrar();
            }
        }
        public double CalcularFolha(int diasUteis) 
        {
            double folha = 0;
            for(int i = 0; i < VetFuncionario.Count; i++)
            {
                Funcionario f = VetFuncionario.ElementAt<Funcionario>(i); // ElementAt - pegar os elementos do índice -> (i)
                folha = folha + f.CalcularSalario(diasUteis);
            }
            return folha;
        }
        public int MostrarQtdeDependentesFuncionario()
        {
            System.Console.WriteLine($"\nDepartamento: {Descricao}");
            int qtde = 0;
            for(int i = 0; i < VetFuncionario.Count; i++)
            {
                Funcionario f = VetFuncionario.ElementAt<Funcionario>(i); // ElementAt - pegar os elementos do índice -> (i)
                qtde = qtde + f.CalcularTotalDependente();
            }
            return qtde;   
        }
    }
}