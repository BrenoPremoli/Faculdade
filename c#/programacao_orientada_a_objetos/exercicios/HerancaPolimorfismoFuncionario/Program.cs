// Função Main()

using HerancaPolimorfismoFuncionario;

Funcionario f = new Funcionario(1, "Breno", 10000);
f.Mostrar();
System.Console.WriteLine($"Cálculo do Salário: {f.CalcularSalario():C}");

Mensalista m = new Mensalista(2, "Carol", 50.0, 160);
m.Mostrar();
System.Console.WriteLine($"Cálculo do Salário: {m.CalcularSalario():C}");

Horista h = new Horista(3, "Benjamin", 50.0, 40);
h.Mostrar();
System.Console.WriteLine($"Cálculo do Salário: {h.CalcularSalario():C}");