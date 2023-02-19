using ClasseProduto;

Produto p1 = new Produto();
p1.codigo = 1223;
p1.descricao = "Arroz";
p1.preco = 10;

Produto p2 = new Produto();
p2.codigo = 1224;
p2.descricao = "Feijão";
p2.preco = 8;

p1.MostrarDados();
p2.MostrarDados();
System.Console.WriteLine("\nValor total: R$ {0}", p1.preco + p2.preco);
