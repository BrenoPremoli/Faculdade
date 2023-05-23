using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace InterfaceTributavel
{
    public class ContaCorrente : Itributavel
    {
        public int Numero { get; set; }
        public double Saldo { get; set; }
        public double CalculaTributos()
        {
            return Saldo * 5 / 100;
        }
    }
}