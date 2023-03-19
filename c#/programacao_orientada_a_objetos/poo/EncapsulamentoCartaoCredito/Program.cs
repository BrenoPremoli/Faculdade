// função Main() implícita

using EncapsulamentoCartaoCredito;

CartaoCredito[] cartao = new CartaoCredito[3];
for (int i = 0; i < cartao.Length; i++)
{
    cartao[i] = new CartaoCredito();
    System.Console.Write("\nDigite o número: ");
    cartao[i].Numero = Convert.ToInt32(Console.ReadLine());
    System.Console.Write("Digite o nome: ");
    cartao[i].Nome = Console.ReadLine();
    System.Console.Write("Digite o saldo: R$ ");
    cartao[i].Saldo = Convert.ToDouble(Console.ReadLine());
    System.Console.Write("Digite o ano: ");
    cartao[i].Ano = Convert.ToInt32(Console.ReadLine());
    System.Console.Write("Digite o código: ");
    cartao[i].Codigo = Convert.ToInt32(Console.ReadLine());
}

for(int i = 0; i < cartao.Length; i++)
{
    cartao[i].Mostrar();
}
