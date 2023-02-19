using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ClasseProduto
{
    public class Produto
    {
        public int codigo;
        public string descricao;
        public double preco;
        public void MostrarDados()
        {
            System.Console.WriteLine("\nCódigo: {0}", codigo);
            System.Console.WriteLine("Descrição: {0}", descricao);
            System.Console.WriteLine("Preço: R$ {0}", preco);
        }
    }
}