using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoVendaVetor
{
    public class Venda
    {
        public int Numero { get; set; }
        public Comprador _Comprador { get; set; }
        public Vendedor _Vendedor { get; set; }
        public List<Produto> VetProduto { get; set; } 
        public double Total { get; set; }
        public Venda(int numero)
        {
            Numero = numero;
        }
        public void Mostrar()
        {
            System.Console.WriteLine("VENDA: {0}\n", Numero);
            _Comprador.MostrarComprador();
            _Vendedor.MostrarVendedor();    
        }

        public void SomaProduto()
        {
            var last = VetProduto.Last();
            foreach (Produto p in VetProduto)
            {
                Total = p.Preco + Total;
                if (p == last)
                {
                    System.Console.WriteLine("Total da venda: {0:C}", Total);
                }
            }
        }
        public void VerbaComprador()
        {
            double troco = _Comprador.Verba - Total;
            System.Console.WriteLine("Restante da Verba: {0:C}", troco);
        }
        public void CalcularComissao()
        {
            double comissao = (_Vendedor.Comissao / 100) * Total;
            System.Console.WriteLine("Valor da Comissão: {0:C}", comissao);
        }
    }
}