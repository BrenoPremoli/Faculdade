// Método Main()

using AbstrataFuncionario;

Assalariado a1 = new Assalariado(1, "Ana", 3000);
Assalariado a2 = new Assalariado(2, "Jerso", 1000);

Comissionado c1 = new Comissionado(3, "Joaquin", 2000, 0.2);
Comissionado c2 = new Comissionado(4, "Richard", 1000, 0.5);

Departamento d1 = new Departamento(10, "TI");
d1.Admitir(a1);
d1.Admitir(c1);

Departamento d2 = new Departamento(11, "RH");
d2.Admitir(a2);
d2.Admitir(c2);

d1.ListarFuncionario();
d2.ListarFuncionario();

// d2.DemitirFuncionario(2);
// d2.ListarFuncionario();

System.Console.WriteLine($"\nTotal da folha do departamento {d1.Descricao}: {d1.CalcularFolha(30):C}"); 
System.Console.WriteLine($"Total da folha do departamento {d2.Descricao}: {d2.CalcularFolha(30):C}");

Dependente dep1 = new Dependente(1, "Breno", 20);
Dependente dep2 = new Dependente(2, "Lorena", 16);
Dependente dep3 = new Dependente(3, "Valcira", 28);
Dependente dep4 = new Dependente(4, "Anderson", 8);

a1.AdicionarDependente(dep1);
a1.AdicionarDependente(dep2);
c2.AdicionarDependente(dep3);
c2.AdicionarDependente(dep4);

a1.CalcularTotalDependente();
a1.ListarDependente();
System.Console.WriteLine($"Total de dependentes: {d1.MostrarQtdeDependentesFuncionario()}"); 
c2.CalcularTotalDependente();
c2.ListarDependente();
System.Console.WriteLine($"Total de dependentes: {d2.MostrarQtdeDependentesFuncionario()}"); 

a1.RemoverDependenteMaioridade();
a1.CalcularTotalDependente();
a1.ListarDependente();
System.Console.WriteLine($"Total de dependentes: {d1.MostrarQtdeDependentesFuncionario()}"); 

c2.RemoverDependenteMaioridade();
c2.CalcularTotalDependente();
c2.ListarDependente();
System.Console.WriteLine($"Total de dependentes: {d2.MostrarQtdeDependentesFuncionario()}"); 


