// função Main()
using ClasseConta; //carregar a pasta do projeto para usar a classe conta

Conta c1; //Declaração de variável -> tipo
c1 = new Conta(); //instância de objeto
c1.MostrarAtributos();
c1.Depositar(600);
c1.MostrarAtributos();


Conta c2 = new Conta(); //jeito padrão
c2.numero = 1910;
c2.titular = "Godofredo";
c2.saldo = 100;
c2.Aplicacao(0.6);
c2.MostrarAtributos();
// if (c1.Transferir(1000, c2) == true)
if (c1.Transferir(1000, c2))
{
    System.Console.WriteLine("Transferência bem sucedida.");
    c1.MostrarAtributos();
    c2.MostrarAtributos();
}
else
{
    System.Console.WriteLine("Transferência não realizada.");
}

