using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RevisaoConstrutorAgregacao
{
    public class Produto
    {
        public static int Codigo { get; set; }
        /*
        public static void SetCodigo (int codigo)
        {
            this.codigo = codigo;
        }
        public static int GetCodigo()
        {
            return Codigo;
        }*/

        public string NomeProduto { get; set; } 
        public double Preco { get; set; }   
        private int qtde;
        public void ListarDados()
        {
            Console.WriteLine("Código: " + Codigo + 
            "\tQuantidade: " + Qtde + "\tNome: " + NomeProduto+
            "\tPreço: " + Preco);
        }
        public Produto()
        {
            
        }
        public Produto(int c, int q, string n, double p)
        {
            Codigo = c;
            Qtde = q;
            NomeProduto = n;
            Preco = p;
        }

        public int Qtde
        {
            get { return qtde; }
            set 
            { 
                if (value > 0)
                    qtde = value; 
                else
                    Console.WriteLine("Quantidade inválida");                         
            }
        }
        

    }
}