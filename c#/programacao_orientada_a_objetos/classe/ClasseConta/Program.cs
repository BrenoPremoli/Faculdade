// função Main()
using ClasseConta; //carregar a cpasta do projeto para usar a classe conta

Conta c1; //Declaração de variável -> tipo
c1 = new Conta(); //instância de objeto
c1.numero = 1477;
c1.titular = "Jorgete";
c1.saldo = 200;
c1.MostrarAtributos();

Conta c2 = new Conta(); //jeito padrão
c2.numero = 1910;
c2.titular = "Godofredo";
c2.saldo = 500;
c2.MostrarAtributos();

c1.Transferir(50, c2);
c1.MostrarAtributos();
c2.MostrarAtributos();
