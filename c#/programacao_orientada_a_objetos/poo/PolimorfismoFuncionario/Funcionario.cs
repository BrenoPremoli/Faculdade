using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PolimorfismoFuncionario
{
    public class Funcionario
    {
        public int Codigo { get; set; }
        public string Nome { get; set; }
        public double Salario { get; set; }
        public Funcionario(int codigo, string nome, double salario)
        {
            Codigo = codigo;
            Nome = nome;
            Salario = salario;
        }
        public virtual double CalcularBonificacao() // Virtual só fica na superclasse, mostra que vai ter outras regras de negócio (Diretor e Gerente)
        {
            return Salario * 10 / 100;
        }
    }
}