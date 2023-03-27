// função Main() implícita

using ComposicaoPedido;

Pedido p1 = new Pedido(1, "24/03/2023", 31, 10);
System.Console.Write("Código do Pedido: {0}\t\t", p1.CodigoPedido);
System.Console.WriteLine("Quantidade: {0}", p1._PedidoItem.Quantidade);

PedidoItem pi2 = new PedidoItem(35, 20);
Pedido p2 = new Pedido(2, "25/03/2023", pi2);
System.Console.Write("Código do Pedido: {0}\t\t", p2.CodigoPedido);
System.Console.WriteLine("Quantidade: {0}", p2._PedidoItem.Quantidade);