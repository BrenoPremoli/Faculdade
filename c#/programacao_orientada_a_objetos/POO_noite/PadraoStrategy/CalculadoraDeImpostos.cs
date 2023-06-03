using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PadraoStrategy
{
    public class CalculadoraDeImpostos
    {
        // Método Equals() compara duas strings verificando se são iguais
        // "ICMS".Equals() para a variável imposto não ter o problema de ser nula   
        public void RealizarCalculo(Orcamento orcamento, string imposto)
        {
            // Este método tem ifs para cada imposto e se existisse 20 impostos???
            // Seria um problema resolver   
            if ("ICMS".Equals(imposto))
            {
                double icms = orcamento.Valor * 0.18;
                Console.WriteLine(icms);
            }
            else if ("ISS".Equals(imposto))
            {
                double iss = orcamento.Valor * 0.05;
                Console.WriteLine(iss);
            }
        }
        // Possível SOLUÇÃO
        // Criar novas classes especializadas e coesas
        // A classe ICMS está coesa e tem uma única responsabilidade 
        // que é calcular imposto e a ISS também. 
        // Mas ainda tem problema, foi trocado de if para métodos  */
        public void RealizarCalculoICMS(Orcamento orcamento)
        {
            double icms = orcamento.Valor * 0.18;
            Console.WriteLine(icms);
        }
        public void RealizarCalculoISS(Orcamento orcamento)
        {
            double iss = orcamento.Valor * 0.05;
            Console.WriteLine(iss);
        }
        // Futuramente precisa implementar mais DEZ outros impostos????
        // O que fazer?
        // Possível SOLUÇÃO, criar novas classes e implementar suas regras de negócio.
        // Outro problema, como ficaria a classe CalculadoraDeImostos???
        // Seria ruim e má prática de programação ter muitos métodos, um para cada tipo de imposto.
        // Solução criar um método genérico para realizar o cálculo do imposto.           
        public void RealizarCalculo(Orcamento orcamento, Imposto imposto)
        {
            double valorImposto = imposto.Calcula(orcamento);
            Console.WriteLine(valorImposto);
        }
    }
}