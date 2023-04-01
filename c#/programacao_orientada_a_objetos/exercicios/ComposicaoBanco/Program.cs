// Função Main() implícita

using ComposicaoBanco;

ContaCorrente conta1 = new ContaCorrente(0, 100);
Poupanca poupanca1 = new Poupanca(1000);

ContaCorrente conta2 = new ContaCorrente(500, 1000);
Poupanca poupanca2 = new Poupanca(5000);

List<ContaCorrente> vetorConta = new List<ContaCorrente>();
vetorConta.Add(conta1);
vetorConta.Add(conta2);

List<Poupanca> vetorPoupanca = new List<Poupanca>();
vetorPoupanca.Add(poupanca1);
vetorPoupanca.Add(poupanca2);

Banco banco1 = new Banco("Santander", vetorConta, vetorPoupanca);
System.Console.WriteLine("\nBANCO - {0}\n", banco1.Nome);
banco1.ListarDados();

// BANCO 2
ContaCorrente conta3 = new ContaCorrente(8000, 10000);
Poupanca poupanca3 = new Poupanca(80000);

ContaCorrente conta4 = new ContaCorrente(2, 5000);
Poupanca poupanca4 = new Poupanca(10000);

List<ContaCorrente> vetorContaItau = new List<ContaCorrente>();
vetorContaItau.Add(conta3);
vetorContaItau.Add(conta4);

List<Poupanca> vetorPoupancaItau = new List<Poupanca>();
vetorPoupancaItau.Add(poupanca3);
vetorPoupancaItau.Add(poupanca4);

Banco banco2 = new Banco("Itaú", vetorContaItau, vetorPoupancaItau);
System.Console.WriteLine("\nBANCO - {0}\n", banco2.Nome);
banco2.ListarDados();
