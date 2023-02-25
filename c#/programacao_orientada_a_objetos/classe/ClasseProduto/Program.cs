// função Main() implícita
using ClasseProduto;

Produto p1 = new Produto();
System.Console.Write("Digite o código: ");
p1.codigo = Convert.ToInt32(Console.ReadLine());
System.Console.Write("Digite o descrição: ");
p1.descricao = Console.ReadLine();
System.Console.Write("Digite o preço: ");
p1.preco = Convert.ToDouble(Console.ReadLine());

Produto p2 = new Produto();
System.Console.Write("\nDigite o código: ");
p2.codigo = Convert.ToInt32(Console.ReadLine());
System.Console.Write("Digite o descrição: ");
p2.descricao = Console.ReadLine();
System.Console.Write("Digite o preço: ");
p2.preco = Convert.ToDouble(Console.ReadLine());

p1.MostrarDados();
p2.MostrarDados();
double soma = p1.preco + p2.preco;
System.Console.WriteLine($"\nValor total: {soma:C}"); // dinheiro
System.Console.WriteLine($"\nValor total: {soma:N}"); // outros números
