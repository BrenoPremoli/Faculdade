// função Main()
using ClasseConta; //carregar a pasta do projeto para usar a classe conta
using System;
using System.IO;

Conta c = new Conta();

c.saldo = 200;
c.MostrarAtributos();
//c.Depositar(-200);

try 
{
    c.Depositar(-200);
}
catch (ArgumentException ex) 
{
    Console.WriteLine("Não é possível depositar valores negativos. -> " + ex.Message);
}

c.Depositar(200);
c.MostrarAtributos();
