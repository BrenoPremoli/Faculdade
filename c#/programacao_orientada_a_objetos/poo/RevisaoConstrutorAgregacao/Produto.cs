using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RevisaoConstrutorAgregacao
{
    public class Produto
    {
        public int Codigo { get; set; } // prop -> encapsulamento
        // quando atributo é static ele sai da instância e só fica dentro da classe

        /*
        public static void SetCodigo(int codigo) // código do set (explícito)
        {
            this.codigo = Codigo;
        }
        public static void GetCodigo(int codigo) // código do get (explícito)
        {
            return Codigo;
        }
        */
        public string NomeProduto { get; set; } // prop -> encapsulamento
        public double Preco { get; set; } // prop -> encapsulamento
        private int qtde; // palavra encapsulada
        public void ExibeDados()
        {
            System.Console.WriteLine("Código: {0}", Codigo);
            System.Console.WriteLine("Nome do produto: {0}", NomeProduto);
            System.Console.WriteLine("Preço: {0}", Preco);
            System.Console.WriteLine("Quantidade: {0}\n", Qtde);
        }
        public Produto()
        {

        }
        public Produto(int codigo, int quantidade, string nomeProduto, double preco) // construtor - iniciar os atributos do objeto
        {
            Codigo = codigo;           
            NomeProduto = nomeProduto;
            Qtde = quantidade;
            Preco = preco;
        }
        public int Qtde // propfull -> encapsulamento
        {
            get { return qtde; } // set/get -> permite interação com o atributo
            set // protege acesso fora do método
            {
                if (value > 0) // validação
                { 
                    qtde = value; 
                } 
                else
                {
                    System.Console.WriteLine("Quantidade inválida.");
                }
            }
        }
    }
}