// função Main() implícito

using AgregacaoConta;

Endereco end = new Endereco("R Terezina", 75,"Vila Paulo","PP");

Cliente cli = new Cliente("Bia",1111,11);

Conta c1 = new Conta();
c1.Numero = 1;
c1.Saldo = 100;
c1.Titular = cli;
c1.Titular._Endereco = end;
c1.Mostrar();

Conta c2 = new Conta();
c2.Numero = 2;
c2.Saldo = 200;
c2.Titular = new Cliente();
c2.Titular.Nome = "Lia";
c2.Titular.Cpf = 22222;
c2.Titular.Rg = 22;
c2.Titular._Endereco = end;
c2.Mostrar();

Cliente cli2 = new Cliente("Léo",3333,33);
Conta c3 = new Conta();
c3.Numero = 3;
c3.Saldo = 300;
c3.Titular = cli2;
c3.Titular._Endereco = end;
c3.Mostrar();
