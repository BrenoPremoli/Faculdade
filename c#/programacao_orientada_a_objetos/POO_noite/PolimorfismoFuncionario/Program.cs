// função Main()
using PolimorfismoFuncionario;

Funcionario f = new Funcionario(1, "Funcionário", 1000);
Console.WriteLine($"{f.Nome} - Bonificação {f.CalcularBonificacao():C}");

Secretario s = new Secretario(2, "Secretário", 1000, 11);
Console.WriteLine($"{s.Nome} - Bonificação {s.CalcularBonificacao():C}");

Gerente g = new Gerente(3, "Gerente", 1000);
Console.WriteLine($"{g.Nome} - Bonificação {g.CalcularBonificacao():C}");

Diretor d = new Diretor(4, "Diretor", 1000);
Console.WriteLine($"{d.Nome} - Bonificação {d.CalcularBonificacao():C}");