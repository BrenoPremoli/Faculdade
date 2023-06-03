// função Main() implícita

using ComposicaoPedido;

Pedido p1 = new Pedido(1, "24/03/2023",31,10);
Console.WriteLine("Código do pedido: "+p1.CodigoPedido
+ "\tQuantidade: " + p1._PedidoItem.Quantidade);

PedidoItem pi = new PedidoItem(35, 20);
Pedido p2 = new Pedido(2, "23/03/2023",pi);
Console.WriteLine("Código do pedido: "+p2.CodigoPedido
+ "\tQuantidade: " + p2._PedidoItem.Quantidade);