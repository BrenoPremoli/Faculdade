using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace InterfaceTributavel
{
    public class SeguroDeVida : Itributavel
    {
        public int Numero { get; set; }
        public double Valor { get; set; }
        public double CalculaTributos()
        {
            return Valor = 75;
        }
    }
}