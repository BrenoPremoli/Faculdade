// função Main() implícita

using AgregacaoConta;

Endereco endereco1 = new Endereco("Rua", 436, "Judas", "KK"); // endereço
Cliente cliente1 = new Cliente("Breno", 9999999, 8888888); // cliente
Conta conta1 = new Conta(); // conta
conta1.Numero = 1;
conta1.Saldo = 4600;
conta1.Titular = cliente1; // relação entre as duas classes
conta1.Titular._Endereco = endereco1;
conta1.MostrarConta();

Conta conta2 = new Conta();
conta2.Numero = 2;
conta2.Saldo = 2000;
conta2.Titular = new Cliente();
conta2.Titular.Nome = "Lia";
conta2.Titular.Cpf = 7777777;
conta2.Titular.Rg = 6666666;
conta2.Titular._Endereco = new Endereco("Rua", 436, "Judas", "KK");
conta2.MostrarConta();

Endereco endereco3 = new Endereco("Rua", 436, "Imperial", "PP");
Cliente cliente3 = new Cliente("Gabi", 33333333, 2222222);
Conta conta3 = new Conta();
conta3.Numero = 3;
conta3.Saldo = 300;
conta3.Titular = cliente3;
conta3.Titular._Endereco = endereco3;
conta3.MostrarConta();