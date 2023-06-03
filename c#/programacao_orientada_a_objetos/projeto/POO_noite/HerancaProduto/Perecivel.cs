using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaProduto
{
    public class Perecivel : Produto
    {
        public string DtFabricacao { get; set; }
        public string DtValidade { get; set; }
        public int Lote { get; set; }

        public Perecivel(int c, string n, double p, string df, string dv, int l) 
        : base(c,n,p)
        {
            DtFabricacao = df;
            DtValidade = dv;
            Lote = l;
        }
        public override void Mostrar()
        {
            base.Mostrar();
            Console.WriteLine("Data Fabricação: " + DtFabricacao + " - Data Validade: "
            + DtValidade + " - Lote: " + Lote);
        }
    }
}