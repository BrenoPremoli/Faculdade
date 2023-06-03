// Método Main()
using PadraoStrategy;

Imposto icms = new ICMS();
Imposto iss = new ISS();

Orcamento orcamento = new Orcamento(1000);

CalculadoraDeImpostos calculadora = new CalculadoraDeImpostos();

calculadora.RealizarCalculo(orcamento, icms);
calculadora.RealizarCalculo(orcamento, iss);
/*Dentro da interface foi implementada as estratégias para o resto do sistema
atendendo ao funcionamento correto e flexível para novos impostos
A implementação ficou genérica, independente do imposto específico */
