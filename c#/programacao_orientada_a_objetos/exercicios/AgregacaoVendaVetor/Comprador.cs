using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AgregacaoVendaVetor
{
    public class Comprador
    {
        public string Nome { get; set; }
        public double Verba { get; set; }
        public Comprador()
        {
        }
        public Comprador(string nome, double verba)  
        {   
            Nome = nome;
            Verba = verba;
        }
        public void MostrarComprador()
        {
            System.Console.WriteLine("COMPRADOR: {0}", Nome);
            System.Console.WriteLine("Verba: {0:C}", Verba);
        }
    }
}