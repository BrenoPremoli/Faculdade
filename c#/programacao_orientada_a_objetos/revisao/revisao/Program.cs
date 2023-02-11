// main()
Console.WriteLine("Hello, World!");

System.Console.WriteLine("\n\nCÁLCULO DE IDADE\n");
System.Console.Write("Informe o ano de nascimento: ");
int ano_nasc = Convert.ToInt32(Console.ReadLine());
int idade = 2023 - ano_nasc;
System.Console.WriteLine("Sua idade: " + idade + " anos.");
System.Console.WriteLine("Sua idade: {0} anos.\n", idade);

// exemplo de estruturas de decisão
if(idade >= 18)
    System.Console.WriteLine("MAIOR de idade\n\n");
else 
    System.Console.WriteLine("MENOR de idade\n\n");

// 's' = aspas simples -> um caractere (tipo char)
// "s" = aspas duplas -> + de um caractere (tipo string)

int opcao = 's';
switch(opcao)
{
    case 'm': System.Console.WriteLine("Realizar uma soma\n\n");
    break;
    case 's': System.Console.WriteLine("Realizar uma subtração\n\n");
    break;
    default: System.Console.WriteLine("Opção inexistente\n\n");
    break;
}

// operador ternário -> condições simples
double media = 9;
string frase = (media >= 6)? "Aluno APROVADO": "Aluno REPROVADO";
System.Console.WriteLine(frase+"\n\n");

// estruturas de repetição
int cont = 1;
while(cont < 5)
{
    System.Console.WriteLine(cont);
    cont++; // cont = cont + 1 ou cont += 1
}
while(cont >= 0)
{
    System.Console.WriteLine(cont);
    cont--; // cont = cont - 1 ou cont -= 1
}
System.Console.WriteLine();

for(cont = 23; cont < 30; cont++)
{
    System.Console.WriteLine(cont);
}
System.Console.WriteLine();

// estrutura de repetição - repita até
do
{
    System.Console.WriteLine(cont);
    cont++;
}while(cont < 35);