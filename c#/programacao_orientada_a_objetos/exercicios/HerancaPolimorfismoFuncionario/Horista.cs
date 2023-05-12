using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaPolimorfismoFuncionario
{
    public class Horista : Funcionario
    {
        public int QtdeHorasSemana { get; set; }
        public Horista(int codigo, string nome, double salario, int qtdeHorasSemana) : base(codigo, nome, salario)
        {
            QtdeHorasSemana = qtdeHorasSemana;
        }
        public override void Mostrar()
        {
            base.Mostrar();
            System.Console.WriteLine($"Horas trabalhadas: {QtdeHorasSemana}");
            System.Console.WriteLine("--------------------------------------");
        }
        public override double CalcularSalario()
        {
            return base.CalcularSalario() * QtdeHorasSemana;
        }
    }
}