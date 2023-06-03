// função Main() implícita
using AgregacaoContaVetor;

Conta c1 = new Conta();
c1.Numero = 1;
c1.Saldo = 1000;

Cliente cli1 = new Cliente("Lia",1111,11);
Cliente cli2 = new Cliente("Bob",2222,22);
Cliente cli3 = new Cliente("Bel",3333,33);

c1.VetTitular = new List<Cliente>(); //instância de objeto List

c1.VetTitular.Add(cli1);
c1.VetTitular.Add(cli2);
c1.VetTitular.Add(cli3);

c1.MostrarConta();
foreach (Cliente c in c1.VetTitular)
    c.MostrarCliente();
