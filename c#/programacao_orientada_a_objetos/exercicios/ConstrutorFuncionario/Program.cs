// função Main() implícita

using ConstrutorFuncionario;

Funcionario f1 = new Funcionario();
f1.Mostrar();

Funcionario f2 = new Funcionario(1200);
f2.Mostrar();

Funcionario f3 = new Funcionario("Willian");
f3.Mostrar();

Funcionario f4 = new Funcionario("Breno", 5000);
f4.Mostrar();

System.Console.WriteLine("\nQuantidade de Funcionários: {0}", Funcionario.Contador);

System.Console.Write("\nDigite a porcentagem de aumento do salário: ");
double porcen = Convert.ToDouble(Console.ReadLine());
f4.Aumentar(porcen);

System.Console.WriteLine("\nValor do novo salário: {0:C}", f4.Salario);

