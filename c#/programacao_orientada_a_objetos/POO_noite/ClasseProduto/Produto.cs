using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ClasseProduto
{
    public class Produto
    {
        //declaração dos atributos
        public int codigo;
        public string descricao= "";
        public double preco;
        //declarar o método/função
        public void MostrarAtributos()
        {
            Console.WriteLine("Código: " + codigo + "\tDescrição: "
            + descricao + "\tPreço: " + preco);
        }
    }
}