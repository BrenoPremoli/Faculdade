/*
27) Implemente um programa que conte a quantidade de colisões ocorridas durante o processo de inserção. Utilize o tratamento de colisão linear. O vetor deve ser de um tipo abstrato de dado composto por nota, nome e email. A nota deve ser um número inteiro e corresponderá a chave.
O menu deve conter as seguintes opções: Inserir, Recuperar e Informar. Na opção recuperar, solicite a nota e caso encontre-a no vetor, exiba o nome e o email correspondente, caso contrário, exiba a mensagem de nota não encontrada. A opção informar, informa a quantidade de colisões ocorridas até o momento.
*/

const int N = 5;

int Hash(int chave)
{
    return (chave % N);
}

int Busca(int i)
{
    int pos = Hash(i);
    return pos;
}

void InsereLinear(tp_no[] v, int c, string n, string e)
{
    int pos = Hash(c);
    while (v[pos] != null)
    {
        pos++;
        pos = pos % N;
    }
    v[pos] = new tp_no();
    v[pos].nota = c;
    v[pos].nome = n;
    v[pos].email = e;
}

void InserirLinear(tp_no[] v)
{
    Console.Write("Digite a nota: ");
    int nota = int.Parse(Console.ReadLine());
    Console.Write("Digite o nome: ");
    string nome = (Console.ReadLine());
    Console.Write("Digite o e-mail: ");
    string email = (Console.ReadLine());
    InsereLinear(v, nota, nome, email);
    Console.WriteLine("CADASTRO CONCLUÍDO\n");
}

int BuscaLinear(tp_no[] v, int i)
{
    int pos = Hash(i);
    int qtd = 0;
    while ((v[pos] == null || v[pos].nota != i) && qtd < N)
    {
        pos++;
        pos = pos % N;
        qtd++;
    }
    if (qtd < N)
    {
        return pos;
    }
    else
    {
        return -1;
    }
}

void AlterarLinear(tp_no[] v)
{
    Console.Write("Digite a nota a ser encontrada: ");
    int nota = int.Parse(Console.ReadLine());
    int pos = BuscaLinear(v, nota);
    if (pos == -1)
    {
        Console.WriteLine("Dados não encontrado(s)");
    }
    else
    {
        Console.WriteLine("DADOS ATUAIS: ");
        Console.WriteLine("\nNome: " + v[pos].nome);
        Console.WriteLine("Nota: " + v[pos].nota);
        Console.WriteLine("E-mail: " + v[pos].email);
        Console.WriteLine("\nDigite novos dados:");
        Console.Write("Nome: ");
        v[pos].nome = Console.ReadLine();
        Console.Write("E-mail: ");
        v[pos].email = Console.ReadLine();
        Console.Clear();
    }
}

void RelatarLinear(tp_no[] v)
{
    int cont = 1;
    for (int pos = 0; pos < N; pos++)
    {
        if (v[pos] != null)
        {
            Console.WriteLine("\nCADASTRO " + cont);
            Console.WriteLine("\nNome: " + v[pos].nome);
            Console.WriteLine("Nota: " + v[pos].nota);
            Console.WriteLine("E-mail: " + v[pos].email);
            cont++;
        }
    }
}

tp_no[] vetor = new tp_no[N];
int opc = 1;
while (opc < 4)
{
    Console.WriteLine("\nMENU");
    Console.WriteLine("=======================================");
    Console.WriteLine("1. Inserir");
    Console.WriteLine("2. Alterar ");
    Console.WriteLine("3. Relatar ");
    Console.WriteLine("4. Sair ");
    Console.WriteLine("=======================================");
    Console.Write("Digite uma opção: ");
    int op = int.Parse(Console.ReadLine());
    Console.Clear();
    if (op == 1)
    {
        InserirLinear(vetor);
    }
    else if (op == 2)
    {
        AlterarLinear(vetor);
    }
    else if (op == 3)
    {
        RelatarLinear(vetor);
    }
    else if (op == 4)
    {
        Console.WriteLine("Saindo...");
        break;
    }
}

class tp_no
{
    public int nota;
    public string nome;
    public string email;
}

