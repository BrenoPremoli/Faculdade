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

Banco banco1 = new Banco(vetorConta, vetorPoupanca);

System.Console.WriteLine("\nBANCO 1\n");
foreach(ContaCorrente conta in banco1.VetConta)
{
    System.Console.WriteLine("Saldo {0:C}", conta.Saldo);
    System.Console.WriteLine("Cheque especial {0:C}", conta.ChequeEspecial);
}
System.Console.WriteLine();
foreach(Poupanca poupanca in banco1.VetPoupanca)
{
    System.Console.WriteLine("Saldo {0:C}", poupanca.SaldoPoupanca);
}