// função Main() implícita
using ClasseProduto;

Produto p1 = new Produto();
Console.Write("Digite o código: ");
p1.codigo = Convert.ToInt32(Console.ReadLine());
Console.Write("Digite a descrição: ");
p1.descricao = Console.ReadLine();
Console.Write("Digite o preço: ");
p1.preco = Convert.ToDouble(Console.ReadLine());

Produto p2 = new Produto();
Console.Write("Digite o código: ");
p2.codigo = Convert.ToInt32(Console.ReadLine());
Console.Write("Digite a descrição: ");
p2.descricao = Console.ReadLine();
Console.Write("Digite o preço: ");
p2.preco = Convert.ToDouble(Console.ReadLine());

p1.MostrarAtributos();
p2.MostrarAtributos();
double soma = p1.preco + p2.preco;
Console.WriteLine($"Soma dos preços {soma:C}\n");
Console.WriteLine($"Soma dos preços {soma:N}");


