// Método Main()

using InterfaceTributavel;

ContaCorrente c1 = new ContaCorrente();
c1.Numero = 1;
c1.Saldo = 5000;
System.Console.WriteLine($"\nImposto Conta Corrente: {c1.CalculaTributos():C}");

SeguroDeVida s1 = new SeguroDeVida();
s1.Numero = 1;
System.Console.WriteLine($"Valor Seguro de Vida: {s1.CalculaTributos():C}");

Itributavel it;

TotalizadorDeTributos t1 = new TotalizadorDeTributos();

it = c1;
t1.Adiciona(it);
System.Console.WriteLine($"\nTributos (Conta Corrente): {t1.Total:C}");

it = s1;
t1.Adiciona(it);
System.Console.WriteLine($"Tributos (Conta Corrente + Seguro de Vida): {t1.Total:C}\n");