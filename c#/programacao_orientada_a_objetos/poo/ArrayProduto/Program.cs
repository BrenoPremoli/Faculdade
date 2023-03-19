// função Main() implícita

using ArrayProduto;

// declaração do vetor
Produto[] vetP = new Produto[3];
double media = 0;
int cont = 0;
for (int i = 0; i < vetP.Length; i++)
{
    vetP[i] = new Produto();
    //digitação dos produtos da classe
    Console.Write("Digite o código: ");
    vetP[i].Codigo = Convert.ToInt32(Console.ReadLine());
    Console.Write("Digite o nome: ");
    vetP[i].Nome = Console.ReadLine();
    Console.Write("Digite o preço: R$ ");
    vetP[i].Preco = Convert.ToDouble(Console.ReadLine());
}

foreach (Produto p in vetP)
{
    p.Mostrar();
    media = media + p.Preco;
    if (p.Preco > 200)
    {
        cont = cont + 1;
    }
}

System.Console.WriteLine($"Média dos preços: {media / vetP.Length:C}");
System.Console.WriteLine("Preços acima de 200 reais: {0}", cont);

// apresentação do vetor
// calcular a média de preços dos produtos
//contar quantos preços estão acima de 200 reais



