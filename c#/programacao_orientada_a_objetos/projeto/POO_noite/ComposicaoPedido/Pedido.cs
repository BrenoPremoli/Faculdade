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

        public Pedido(int cp, string dt,//classe Pedido 
        int cpi, int q)//classe PedidoItem
        {
            CodigoPedido = cp;
            Data = dt;
            //relacionamento de composição
            _PedidoItem = new PedidoItem(cpi,q);            
        }

        public Pedido(int cp,string dt,PedidoItem pi)
        {
            CodigoPedido = cp;
            Data = dt;
            _PedidoItem = pi;
        }
    }
}