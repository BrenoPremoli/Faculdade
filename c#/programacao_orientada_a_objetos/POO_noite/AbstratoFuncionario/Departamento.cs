using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AbstratoFuncionario
{
    public class Departamento
    {
        public int Codigo { get; set; }
        public string Descricao { get; set; }
        public List<Funcionario> VetF { get; set; }
        public Departamento(int codigo, string desc)
        {
            Codigo = codigo;
            Descricao = desc;
            VetF = new List<Funcionario>();
        }
        public void Admitir(Funcionario f)
        {
            VetF.Add(f);
        }
        public void DemitirFuncionario(int codigo)
        {
            for (int i = 0; i < VetF.Count; i++)
            {
                Funcionario f = VetF.ElementAt<Funcionario>(i);
                if (f.Codigo == codigo)
                    VetF.Remove(f);
            }
        }
        public void ListarFuncionarios()
        {
            Console.WriteLine("\nLista de funcionários do departamento " + Descricao);
            for (int i = 0; i < VetF.Count; i++)
            {
                Funcionario f = VetF.ElementAt<Funcionario>(i);
                f.Mostrar();
            }
        }
        public double CalcularFolha(int diasUteis)
        {
            double folha = 0;
            for (int i = 0; i < VetF.Count; i++)
            {
                Funcionario f = VetF.ElementAt<Funcionario>(i);
                folha = folha + f.CalcularSalario(diasUteis);
            }
            return folha;
        }
    }
}