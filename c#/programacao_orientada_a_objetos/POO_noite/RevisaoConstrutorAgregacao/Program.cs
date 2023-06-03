// função Main() implícita
using RevisaoConstrutorAgregacao;

Produto p1 = new Produto(1,1,"Monitor",1500);// p1.setcodigo(1) p1.codigo = 1;
System.Console.WriteLine("Código: " + Produto.Codigo);
Produto p2 = new Produto(2, 1, "impressora", 1000);
Produto p3 = new Produto();

Carrinho c = new Carrinho();
c.Itens = new List<Produto>();
c.Itens.Add(p1);//agregação
c.Itens.Add(p2);
c.ExibeDados();



