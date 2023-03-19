// função Main() implícita

using AgregacaoVendaVetor;

// VENDA 1

Venda venda1 = new Venda(1);
Comprador comprador1 = new Comprador("Bia", 200);
Vendedor vendedor1 = new Vendedor("César", 3);

Produto produto1 = new Produto("Arroz", 10, 5);
Produto produto2 = new Produto("Feijão", 5, 2);
Produto produto3 = new Produto("Salada", 2, 3);

venda1.VetProduto = new List<Produto>();

venda1.VetProduto.Add(produto1);
venda1.VetProduto.Add(produto2);
venda1.VetProduto.Add(produto3);

venda1._Comprador = comprador1;
venda1._Vendedor = vendedor1;

venda1.Mostrar();

foreach (Produto p in venda1.VetProduto)
{
    p.MostrarProduto();
}

venda1.SomaProduto();
venda1.VerbaComprador();
venda1.CalcularComissao();

// VENDA 2

