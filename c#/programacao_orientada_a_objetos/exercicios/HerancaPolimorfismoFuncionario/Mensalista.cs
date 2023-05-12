using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaPolimorfismoFuncionario
{
    public class Mensalista : Funcionario
    {
        public int QtdeHorasTrabalhadas { get; set; }
        public Mensalista(int codigo, string nome, double salario, int qtdeHorasTrabalhadas) : base(codigo, nome, salario)
        {
            QtdeHorasTrabalhadas = qtdeHorasTrabalhadas;
        }

        public override void Mostrar()
        {
            base.Mostrar();
            System.Console.WriteLine($"Horas trabalhadas: {QtdeHorasTrabalhadas}");
            System.Console.WriteLine("--------------------------------------");
        }
        public override double CalcularSalario()
        {
            return base.CalcularSalario() * QtdeHorasTrabalhadas;
        }
    }
}