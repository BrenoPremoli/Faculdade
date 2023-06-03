// método Main()

using AbstratoFuncionario;

Assalariado a1 = new Assalariado(1, "Ana", 1000);
Assalariado a2 = new Assalariado(2, "Bia", 1000);
Comissionado c1 = new Comissionado(3, "Lia", 1000, 0.2);
Comissionado c2 = new Comissionado(4, "Leo", 1000, 0.3);

Departamento d1 = new Departamento(10, "TI");
d1.Admitir(a1);
d1.Admitir(c1);

Departamento d2 = new Departamento(11, "RH");
d2.Admitir(a2);
d2.Admitir(c2);

d1.ListarFuncionarios();
d2.ListarFuncionarios();

//d2.DemitirFuncionario(2);
//d2.ListarFuncionarios();

Console.WriteLine($"Total da folha do departamento {d1.Descricao} {d1.CalcularFolha(30):C}");

Console.WriteLine($"Total da folha do departamento {d2.Descricao} {d2.CalcularFolha(30):C}");