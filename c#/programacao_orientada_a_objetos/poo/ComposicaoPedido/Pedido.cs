using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ComposicaoPedido
{
    public class Pedido
    {
        public int CodigoPedido { get; set; }
        public string Data { get; set; }
        public PedidoItem _PedidoItem { get; set; }
        public Pedido(int codigoPedido, string data, int codigoPedidoItem, int quantidade) // construtor - forma de realizar a composição no construtor
        // int codigoPedido, string data (classe pedido)
        // int codigoPedidoItem, int quantidade (classe pedido item)
        {
            CodigoPedido = codigoPedido;
            Data = data;
            // relacionamento de composição
            _PedidoItem = new PedidoItem(codigoPedidoItem, quantidade); 
        }

        public Pedido(int codigoPedido, string data, PedidoItem pedidoItem) // outro construtor - forma de realizar a composição na instância
        {
            CodigoPedido = codigoPedido;
            Data = data;
            _PedidoItem = pedidoItem;
        }
    }
}