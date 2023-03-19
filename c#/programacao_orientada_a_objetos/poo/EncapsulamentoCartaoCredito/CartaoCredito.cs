using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EncapsulamentoCartaoCredito
{
    public class CartaoCredito
    {
        //int numero
        //string nome
        //double saldo
        //int ano vencimento
        //int codigoSeguranca

        //implementar os metodos de encapsulamento compacto e completo para os atributos
        //valide o ano ser acima de 2022
        //realize algumas instancias e teste

        private int numero;
        private string nome;
        private double saldo;
        private int ano;
        private int codigo;
        public void Mostrar()
        {
            System.Console.WriteLine("Número: {0}", numero);
            System.Console.WriteLine("Nome: {0}", nome);
            System.Console.WriteLine($"Saldo: {saldo:C}");
            System.Console.WriteLine("Ano: {0}", ano);
            System.Console.WriteLine("Código: {0}\n", codigo);
        }
        public int Numero 
        {
            set
            {
                if (value != 0)
                    this.numero = value;
                else
                    System.Console.WriteLine("Numero inválido!");
            }    
            get
            {
                return this.numero;
            }
        }
        public string Nome
        {
            get { return nome; }
            set
            {
                if (value != "")
                    nome = value; 
                else
                    System.Console.WriteLine("Nome não pode ficar em branco!");
            }
        }
        public double Saldo
        {
            set
            {
                if (value >= 0)
                    this.saldo = value;
                else
                    System.Console.WriteLine("Saldo inválido!");
            }
            get
            {
                return this.saldo;
            }
        }
        public int Ano
        {
            get { return ano; }
            set 
            { 
                if (value > 2022)
                    {ano = value; }
                else
                    System.Console.WriteLine("Ano inválido!");
             }
        }
        public int Codigo
        {
            set
            {
                if (value > 0)
                    this.codigo = value;
                else
                    System.Console.WriteLine("Saldo inválido!");
            }
            get
            {
                return this.codigo;
            }
        }
    }
}