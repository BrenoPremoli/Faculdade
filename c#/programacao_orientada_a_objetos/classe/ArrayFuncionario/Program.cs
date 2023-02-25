// função Main()
using ArrayFuncionario;

Funcionario[] vetF = new Funcionario[3];
for (int i = 0; i < vetF.Length; i++) // Cadastrar 3 funcionários
{
    vetF[i] = new Funcionario();
    System.Console.Write("\nDigite o código: ");
    vetF[i].codigo = Convert.ToInt32(Console.ReadLine());
    System.Console.Write("Digite o nome: ");
    vetF[i].nome = Console.ReadLine();
    System.Console.Write("Digite o salário: R$ ");
    vetF[i].salario = Convert.ToDouble(Console.ReadLine());
}

double media = 0;

foreach (Funcionario f in vetF)
{
    media = media + f.salario; // Calcular a média salarial
    if (f.salario > 300)
    {
        System.Console.WriteLine($"\nNome: {f.nome} \tSalário: {f.salario:C}");
    }
    else if (f.salario < 300)
    {
        f.Aumentar();
    }
}

System.Console.WriteLine($"\nMédia salarial: {media / vetF.Length:C}");

foreach (Funcionario f in vetF)
{
    f.MostrarDados();
}


/*
Cadastrar 3 funcionários
Calcular a média salarial
Apresentar nome e salário de quem recebe mais de 300 reais
Criar um método na classe Funcionario para aplicar aumento aos salários menores que 300 reais
*/