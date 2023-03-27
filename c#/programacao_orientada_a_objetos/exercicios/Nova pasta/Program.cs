// Função Main() implícita

using ComposicaoBanco;

ContaCorrente conta1 = new ContaCorrente(0, 100);
Poupanca poupanca1 = new Poupanca(1000);

ContaCorrente conta2 = new ContaCorrente(500, 1000);
Poupanca poupanca2 = new Poupanca(5000);

List<ContaCorrente> vc = new List<ContaCorrente>();
vc.Add(conta1);
vc.Add(conta2);

List<Poupanca> vp = new List<Poupanca>();
vp.Add(poupanca1);
vp.Add(poupanca2);

Banco banco1 = new Banco(vc, vp);
Banco banco2 = new Banco(vc, vp);

foreach(ContaCorrente conta in banco1.VetConta)
{
    System.Console.WriteLine("Saldo {0:C}", conta.Saldo);
    System.Console.WriteLine("Cheque especial {0:C}", conta.ChequeEspecial );
}