// função Main() implícita

using ConstrutorFuncionario;

Funcionario f1 = new Funcionario();
f1.Mostrar();

Funcionario f2 = new Funcionario(1200);
f2.Mostrar();

Funcionario f3 = new Funcionario(3, "Willian");
f3.Mostrar();

Funcionario f4 = new Funcionario(5, "Breno", 17338);
f4.Mostrar();

System.Console.WriteLine("\nQuantidade de Instâncias: {0}", Funcionario.Contador);
