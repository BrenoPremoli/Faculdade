using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace HerancaProduto
{
    public class Perecivel : Produto
    {
        private string dtFabricacao;
        private string dtValidade;
        private int lote;
        public Perecivel()
        {
        }
        public Perecivel(int codigo, string nome, float preco, string dtFabricacao, string dtValidade, int lote) : base(codigo, nome, preco)
        {
            DtFabricacao = dtFabricacao;
            DtValidade = dtValidade;
            Lote = lote;
        }
        public void Mostrar()
        {
            base.Mostrar();
            System.Console.WriteLine($"Data de Fabricação: {DtFabricacao}");
            System.Console.WriteLine($"Data de Validade: {DtValidade}");
            System.Console.WriteLine($"Lote: {Lote}\n");
        }
        public string DtValidade
        {
            get { return dtValidade; }
            set { dtValidade = value; }
        }
        public string DtFabricacao
        {
            get { return dtFabricacao; }
            set { dtFabricacao = value; }
        }
        public int Lote
        {
            get { return lote; }
            set { lote = value; }
        }
        
    }
}