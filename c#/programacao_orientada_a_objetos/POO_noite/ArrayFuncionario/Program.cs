//função Main() implícita

using ArrayFuncionario;

Funcionario[] vetF = new Funcionario[3];
for(int i = 0; i < vetF.Length; i++)
{
    vetF[i] = new Funcionario();
    Console.Write("Digite o código: ");
    vetF[i].codigo = Convert.ToInt32(Console.ReadLine());
    Console.Write("Digite o nome: ");
    vetF[i].nome = Console.ReadLine();
    Console.Write("Digite o salário: ");
    vetF[i].salario = Convert.ToDouble(Console.ReadLine());
}

foreach (Funcionario f in vetF)
    f.MostrarAtributos();

double somaSalarios = 0;
foreach (Funcionario f in vetF)
    somaSalarios += f.salario;
Console.WriteLine($"\nMédia dos salários {somaSalarios/vetF.Length:C}\n");

foreach (Funcionario f in vetF)
{
    if (f.salario > 300)
        f.MostrarAtributos();
}


/* Cadastrar 3 funionários;
Calcular a média salárial
Apresentar nome e salário de quem recebe mais que 300 reais
criar um método na classe Funcionário para aplicar aumento 
aos salários menores que 300 reais */