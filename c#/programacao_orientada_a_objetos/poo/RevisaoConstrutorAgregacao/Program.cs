// Função Main() implícita

using RevisaoConstrutorAgregacao;

Produto p1 = new Produto(4, 1, "Arroz", 7); // p1.setcodigo(1) // ou p1.setcodigo(1)
Produto p2 = new Produto(3, 1, "Batata", 3);
Produto p3 = new Produto();

Carrinho c = new Carrinho();
c.Itens = new List<Produto>();
c.Itens.Add(p1); // agregação
c.Itens.Add(p2);
c.ExibeDados();

