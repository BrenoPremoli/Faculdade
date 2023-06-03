// função Main()
using ClasseConta;//carregar a pasta do projeto para 
//usar a classe Conta

Conta c1; //Declaração de variável
c1 = new Conta();//instancia de objeto
c1.MostrarAtributos();
c1.Depositar(600);
c1.MostrarAtributos();

Conta c2 = new Conta();
c2.numero = 2;
c2.titular = "Bia";
c2.saldo = 100;
c2.Aplicacao(0.6);
c2.MostrarAtributos();
//if (c1.Transferir(1000,c2) == true)
if (c1.Transferir(1000,c2))
{
    Console.WriteLine("Transfência realizada com sucesso");
    c1.MostrarAtributos();
    c2.MostrarAtributos();
}
else    
    Console.WriteLine("Transfência não realizada");