// Método Main()

using PadraoProjetoTrabalho;
// O orçamento pode receber um desconto de acordo com o tipo
// da venda que será efetuada.
// Se o cliente comprar mais de 5 itens, ele recebe 10% de desconto;
// se ele fez uma compra casada de alguns produtos, recebe 7%
// de desconto e assim por diante.

Desconto dez = new Dez();
Desconto sete = new Sete();


Item it1 = new Item("mouse", 100.10);
Item it2 = new Item("pendrive", 80.90);
Item it3 = new Item("monitor", 950.99);
Item it4 = new Item("impressora", 2000.55);
Item it5 = new Item("Rj45", 1.09);
Item it6 = new Item("cadeira", 500.34);

Orcamento orcamento = new Orcamento(7000);

orcamento.AdicionaItens(it1);
orcamento.AdicionaItens(it2);
orcamento.AdicionaItens(it3);
orcamento.AdicionaItens(it4);
orcamento.AdicionaItens(it5);
orcamento.AdicionaItens(it6);

CalculadoraDeDescontos calculadora = new CalculadoraDeDescontos();
calculadora.RealizarCalculo(orcamento, sete);
calculadora.RealizarCalculo(orcamento, dez);


